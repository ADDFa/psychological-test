<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\QuestionController;
use App\Http\Helper\Response;
use App\Models\Answers\Me as AnswersMe;
use App\Models\MeWord;
use App\Models\QuestionCategory;
use App\Models\Questions\Me;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MeController extends QuestionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [
            "questions" => Me::all(),
            "category"  => QuestionCategory::where("category", "me")->first()
        ];

        return Response::success($result);
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
            "id"        => "required|exists:me_questions,id",
            "answer"    => $this->optionRule()
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $question = Me::find($id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersMe::updateOrCreate(
            ["me_question_id" => $id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }

    public function words()
    {
        return response()->json(MeWord::with("subWords")->get());
    }
}
