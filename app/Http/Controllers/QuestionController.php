<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function getQuestionByCategory($category)
    {
        $validator = Validator::make(["category" => $category], [
            "category" => "required|exists:question_categories,category"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $controller = ucwords($category) . "Controller";
        return app()->call("\App\Http\Controllers\Questions\\$controller@index");
    }
}
