<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\QuestionCategory;
use App\Models\Questions\An;
use App\Models\Questions\Fa;
use App\Models\Questions\Ge;
use App\Models\Questions\Me;
use App\Models\Questions\MSDT;
use App\Models\Questions\PAPI;
use App\Models\Questions\Ra;
use App\Models\Questions\Se;
use App\Models\Questions\Wa;
use App\Models\Questions\Wu;
use App\Models\Questions\Zr;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
    public function index(QuestionCategory $category)
    {
        $questions = [];

        switch ($category->category) {
            case "se":
                $questions = Se::all();
                break;
            case "wa":
                $questions = Wa::all();
                break;
            case "an":
                $questions = An::all();
                break;
            case "ge":
                $questions = Ge::all();
                break;
            case "ra":
                $questions = Ra::all();
                break;
            case "zr":
                $questions = Zr::all();
                break;
            case "fa":
                $questions = Fa::all();
                break;
            case "wu":
                $questions = Wu::all();
                break;
            case "me":
                $questions = Me::all();
                break;
            case "msdt":
                $questions = MSDT::all();
                break;
            case "papi":
                $questions = PAPI::all();
                break;
        }

        return Response::success([
            "questions" => $questions
        ]);
    }

    // public function getQuestionByCategory(QuestionCategory $category)
    // {
    //     return Response::success($category);
    // }

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
