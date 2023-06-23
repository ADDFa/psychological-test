<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\QuestionController;
use App\Http\Helper\Response;
use App\Models\Answers\Ge as AnswersGe;
use App\Models\QuestionCategory;
use App\Models\QuestionGe\Key;
use App\Models\Questions\Ge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeController extends QuestionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [
            "questions" => Ge::all(),
            "category"  => QuestionCategory::where("category", "ge")->first()
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
            "id"        => "required|exists:ge_questions,id",
            "answer"    => "required|string"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $key = Key::where("key", $request->answer)->first();
        $point = "0";
        if ($key) $point = $key->point;

        $answer = AnswersGe::updateOrCreate(
            ["ge_question_id" => $id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "point" => $point]
        );
        return $answer;
    }
}
