<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Models\Answers\Wa as AnswersWa;
use App\Models\Questions\Wa;
use App\Validator\AnswerValidator;
use Illuminate\Http\Request;

class WaController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("wa_questions", $request->question_id)
            ->validOption($request->answer)
            ->run();

        if ($validator->fails()) return Response::errors($validator);

        $question = Wa::find($request->question_id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersWa::updateOrCreate(
            ["wa_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
