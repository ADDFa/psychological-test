<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Objects\ISTScorring;
use App\Models\Exam;
use App\Models\ISTScore;
use App\Objects\ISTScore as ISTScoreResult;
use App\Models\QuestionCategory;
use App\Models\UserTest;
use App\Models\UserTestDeadline;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::success(Exam::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return Response::success($exam);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function doTheExam(Request $request, QuestionCategory $category)
    {
        $userId = $request->user->id;

        $userTest = UserTest::where("user_id", $userId)->first();
        if (!$userTest) {
            $userTest = new UserTest([
                "user_id"       => $userId,
                "exam_id"       => $category->exam_id
            ]);
            $userTest->save();
        }

        $userTestDeadline = UserTestDeadline::firstOrCreate(
            ["user_test_id" => $userTest->id, "question_category" => $category->category],
            ["deadline" => time() + $category->time]
        );
        if ($userTestDeadline->deadline < time()) {
            return Response::message("Waktu Ujian Habis", 408);
        }

        function alreadyAnswer($category, $userId)
        {
            $query = DB::table($category . "_answers")
                ->join($category . "_questions", $category . "_questions.id", "=", $category . "_question_id");

            $select = [
                $category . "_questions.*",
                "answer"
            ];

            if ($category === "fa" || $category === "wu") {
                $relation = $category . "_image_questions";
                $query = $query->join(
                    $relation,
                    "{$relation}.id",
                    "=",
                    $category . "_questions.{$category}_image_question_id"
                );
                $select[] = "{$relation}.question as question_image";
            }

            return $query->where("user_id", $userId)->get($select);
        }

        if (count(alreadyAnswer($category->category, $userId)) === 0) {
            $questions = DB::table($category->category . "_questions")->get("id");

            $values = [];
            foreach ($questions as $question) {
                array_push($values, [
                    "{$category->category}_question_id" => $question->id,
                    "user_id"   => $userId
                ]);
            }

            DB::table($category->category . "_answers")->insert($values);
        }

        return Response::success([
            "questions" => alreadyAnswer($category->category, $userId),
            "deadline"  => $userTestDeadline
        ]);
    }

    public function score(Request $request, Exam $exam)
    {
        $userId = $request->user->id;
        $userTest = UserTest::where("user_id", $userId)->where("exam_id", $exam->id)->first();
        if (!$userTest) {
            return Response::message("Anda belum melakukan tes", 404);
        }

        try {
            $result = null;
            switch ($exam->exam) {
                case "ist":
                    $istScore = ISTScore::where("user_id", $userId)->first();
                    if (!$istScore) new ISTScorring($userId);

                    $result = ISTScoreResult::classification($userId)->result();
                    break;
            }

            return $result ? Response::success($result) : Response::success($result, 204);
        } catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }

    public function userScore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "user_id"  => "required|exists:user_test,user_id",
            "exam_id"       => "required|exists:exams,id"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        try {
            $result = null;
            $exam = Exam::find($request->exam_id);

            switch ($exam->exam) {
                case "ist":
                    $result = ISTScoreResult::classification($request->user_id)->scores()->answers()->result();
                    break;
            }

            return $result ? Response::success($result) : Response::success(null, 204);
        } catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }
}
