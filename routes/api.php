<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionCategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Questions\MeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserTestController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post("/login", "login");
    Route::post("/register", "register");
    Route::post("/refresh-token", "refreshToken");
});

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::controller(ExamController::class)->group(function () {
        Route::get("/exam", "index");
        Route::get("/exam/{exam}", "show");
        Route::post("/exam/{category}/do-the-exam", "doTheExam"); // only user access | middleware belum ada
        // Route::get("/exam/{exam}/score", "score"); // only user access | middleware belum ada
        // Route::get("/user-score", "userScore"); // only admin access | middleware belum ada
        Route::patch("/exam/toggle/{exam}", "toggle");
    });

    Route::controller(QuestionCategoryController::class)->group(function () {
        Route::get("/question-category/{category}", "show");
    });

    Route::controller(QuestionController::class)->group(function () {
        Route::get("/question/{category}", "getQuestionByCategory");
        Route::get("/question/image/{fileName}", "getQuestionImage");
    });

    Route::controller(AnswerController::class)->group(function () {
        Route::get("/answer/{category}", "index");
        Route::get("/answer/{category}/{question_id}", "show");
        Route::post("/answer", "store");
    });

    Route::controller(MeController::class)->group(function () {
        Route::get("/me-words", "words");
    });

    Route::controller(TestController::class)->group(function () {
        Route::post("/test", "store");
    });

    Route::controller(UserTestController::class)->group(function () {
        Route::get("/user-test", "index"); // only admin | middleware belum
    });
});
