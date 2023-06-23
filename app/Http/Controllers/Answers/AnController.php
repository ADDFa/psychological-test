<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Models\Answers\An as AnswersAn;
use App\Models\Questions\An;
use App\Validator\AnswerValidator;
use Illuminate\Http\Request;

class AnController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("an_questions", $request->question_id)
            ->validOption($request->answer)
            ->run();

        if ($validator->fails()) return Response::errors($validator);

        $question = An::find($request->question_id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersAn::updateOrCreate(
            ["an_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
