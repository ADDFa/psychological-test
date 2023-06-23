<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Models\Answers\Me as AnswersMe;
use App\Models\Questions\Me;
use App\Validator\AnswerValidator;
use Illuminate\Http\Request;

class MeController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("me_questions", $request->question_id)
            ->validOption($request->answer)
            ->run();

        if ($validator->fails()) return Response::errors($validator);

        $question = Me::find($request->question_id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersMe::updateOrCreate(
            ["me_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
