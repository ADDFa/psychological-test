<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Models\Answers\Zr as AnswersZr;
use App\Models\Questions\Zr;
use App\Validator\AnswerValidator;
use Illuminate\Http\Request;

class ZrController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("ra_questions", $request->question_id)
            ->validInteger($request->answer)
            ->run();

        if ($validator->fails()) return Response::errors($validator);

        $question = Zr::find($request->question_id);
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

        $answer = AnswersZr::updateOrCreate(
            ["zr_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "correct" => $correct]
        );
        return $answer;
    }
}
