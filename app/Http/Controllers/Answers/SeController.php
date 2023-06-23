<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Validator\AnswerValidator;
use App\Models\Answers\Se as AnswersSe;
use App\Models\Questions\Se;
use Illuminate\Http\Request;

class SeController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("se_questions", $request->question_id)
            ->validOption($request->answer)
            ->run();

        if ($validator->fails()) return Response::errors($validator);

        $question = Se::find($request->question_id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersSe::updateOrCreate(
            ["se_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
