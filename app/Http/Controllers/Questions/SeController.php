<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\QuestionController;
use App\Http\Helper\Response;
use App\Models\Answers\Se as AnswersSe;
use App\Models\QuestionCategory;
use App\Models\Questions\Se;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SeController extends QuestionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [
            "questions" => Se::all(),
            "category"  => QuestionCategory::where("category", "se")->first()
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
            "id"        => "required|exists:se_questions,id",
            "answer"    => $this->optionRule()
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $question = Se::find($id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersSe::updateOrCreate(
            ["se_question_id" => $id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
