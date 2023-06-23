<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{
    private $validator, $controller;

    private function defaultValidator($category): bool
    {
        $validator = Validator::make(["category" => $category], [
            "category" => "required|exists:question_categories,category"
        ]);
        $this->validator = $validator;
        $this->controller = ucwords($category) . "Controller";

        return $validator->fails();
    }

    protected function optionRule()
    {
        return [
            "required",
            Rule::in(["a", "b", "c", "d", "e"])
        ];
    }

    public function getQuestionByCategory($category)
    {
        if ($this->defaultValidator($category)) return Response::errors($this->validator);
        return app()->call("\App\Http\Controllers\Questions\\{$this->controller}@index");
    }

    public function answer(Request $request, $category, $id)
    {
        if ($this->defaultValidator($category)) return Response::errors($this->validator);
        return app()->call("\App\Http\Controllers\Questions\\{$this->controller}@answer", [
            "category" => $category,
            "id" => $id
        ]);
    }
}
