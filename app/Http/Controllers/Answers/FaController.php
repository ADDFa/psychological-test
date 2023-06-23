<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Models\Answers\Fa as AnswersFa;
use App\Models\Questions\Fa;
use App\Validator\AnswerValidator;
use Illuminate\Http\Request;

class FaController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("fa_questions", $request->question_id)
            ->validOption($request->answer)
            ->run();

        if ($validator->fails()) return Response::errors($validator);

        $question = Fa::find($request->question_id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersFa::updateOrCreate(
            ["fa_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
