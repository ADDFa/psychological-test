<?php

namespace App\Http\Controllers\Answers;

use App\Http\Controllers\AnswerController;
use App\Http\Helper\Response;
use App\Models\Answers\Ge;
use App\Models\QuestionGe\Key;
use App\Validator\AnswerValidator;
use Illuminate\Http\Request;

class GeController extends AnswerController
{
    public function store(Request $request)
    {
        $validator = (new AnswerValidator())
            ->questionExists("ge_questions", $request->question_id)
            ->validString($request->answer)
            ->run();
        if ($validator->fails()) return Response::errors($validator);

        $key = Key::where("key", $request->answer)->first();
        $point = "0";
        if ($key) $point = $key->point;

        $answer = Ge::updateOrCreate(
            ["ge_question_id" => $request->question_id, "user_id" => $request->user->id],
            ["answer" => $request->answer, "point" => $point]
        );
        return $answer;
    }
}
