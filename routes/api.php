<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ParticipantTestController;
use App\Http\Controllers\Questions\MeController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\ExamMiddleware;
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

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::controller(ExamController::class)->middleware(ExamMiddleware::class)->group(function () {
        Route::get("/question", "index");
        Route::get("/question/image", "show");
    });

    Route::controller(ParticipantTestController::class)->group(function () {
        Route::get("/no-test", "store");
    });

    Route::get("question-me/words", [MeController::class, "words"]);
});

Route::controller(AuthController::class)->group(function () {
    Route::post("/register", "register");
    Route::post("/login", "login");
});
