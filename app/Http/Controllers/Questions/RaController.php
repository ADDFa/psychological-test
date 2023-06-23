<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\QuestionController;
use App\Http\Helper\Response;
use App\Models\Answers\Ra as AnswersRa;
use App\Models\QuestionCategory;
use App\Models\Questions\Ra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RaController extends QuestionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [
            "questions" => Ra::all(),
            "category"  => QuestionCategory::where("category", "ra")->first()
        ];

        return Response::success($result);
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
    public function show($id)
    {
        //
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

    public function answer(Request $request, $category, $id)
    {
        $validator = Validator::make($request->all(), [
            "id"        => "required|exists:ra_questions,id",
            "answer"    => "required|integer"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $question = Ra::find($id);
        $decoded = base64_decode($question->key);
        $decodes = str_split($decoded);
        $answers = str_split($request->answer);

        $correct = true;
        foreach ($answers as $answer) {
            if (array_search($answer, $decodes) === false) {
                $correct = false;
                break;
            }
        }

        $answer = AnswersRa::updateOrCreate(
            ["ra_question_id" => $id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
