<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\Exam;
use App\Models\QuestionCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $category = $category->category;

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

        if (count(alreadyAnswer($category, $userId)) === 0) {
            $questions = DB::table($category . "_questions")->get("id");

            $values = [];
            foreach ($questions as $question) {
                array_push($values, [
                    "{$category}_question_id" => $question->id,
                    "user_id"   => $userId
                ]);
            }

            DB::table($category . "_answers")->insert($values);
        }

        return Response::success(alreadyAnswer($category, $userId));
    }
}
