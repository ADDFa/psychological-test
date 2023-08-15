<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\QuestionCategory;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
    public function getQuestionByCategory(QuestionCategory $category)
    {
        return Response::success($category);
    }

    public function getQuestionImage($fileName)
    {
        $exists = Storage::exists("questions/$fileName");
        if ($exists) {
            return response(Storage::get("questions/$fileName"), 200, [
                "Content-Type" => "image/*"
            ]);
        }

        return Response::message("File Not Found!", 404);
    }
}
