<?php

namespace App\Validator;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AnswerValidator
{
    private array $data = [], $rules = [];

    public function questionExists($table, $id)
    {
        $this->data += ["question_id" => $id];
        $this->rules = ["question_id" => "exists:$table,id"];

        return $this;
    }

    public function validOption($answer)
    {
        $this->data += ["answer" => $answer];
        $this->rules += ["answer" => [
            "required",
            Rule::in(["a", "b", "c", "d", "e"])
        ]];

        return $this;
    }

    public function validString($answer)
    {
        $this->data += ["answer" => $answer];
        $this->rules += ["answer" => "required|string"];

        return $this;
    }

    public function validInteger($answer)
    {
        $this->data = ["answer" => $answer];
        $this->rules = ["answer" => "required|integer"];

        return $this;
    }

    public function run()
    {
        return Validator::make($this->data, $this->rules);
    }
}
