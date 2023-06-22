<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\QuestionCategory;
use Illuminate\Http\Request;

class QuestionCategoryController extends Controller
{
    public function show($category)
    {
        return Response::success(QuestionCategory::where("category", $category)->first());
    }
}
