<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
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
    Route::post("/register", "register");
    Route::post("/refresh-token", "refreshToken");
    Route::post("/login", "login");
});

Route::controller(QuestionController::class)->group(function () {
    Route::get("/questions/{category}", "getQuestionByCategory");
});
