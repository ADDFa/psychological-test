<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Models\Answers\Wu as AnswersWu;
use App\Models\Questions\Wu;
use App\Validator\AnswerValidator;
use Illuminate\Http\Request;

class WuController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("wu_questions", $request->question_id)
            ->validOption($request->answer)
            ->run();

        if ($validator->fails()) return Response::errors($validator);

        $question = Wu::find($request->question_id);
        $correct = md5($request->answer) === $question->key;

        $answer = AnswersWu::updateOrCreate(
            ["wu_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
