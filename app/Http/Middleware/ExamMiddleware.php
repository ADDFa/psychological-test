<?php

namespace App\Http\Middleware;

use App\Http\Res\Api;
use App\Models\Exam;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ExamMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ISTExam = ["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me"];
        $validator = Validator::make($request->all(), [
            "type"  => [
                "required",
                Rule::in(array_merge($ISTExam, ["MSDT", "PAPI"]))
            ]
        ]);

        if ($validator->fails()) return Api::errors($validator, 400);

        $exam = $request->type;
        if (array_search($request->type, $ISTExam)) {
            $exam = "ist";
        }
        $isExamActive = Exam::where("exam", "like", "%$exam%")->first()->active;
        if (!$isExamActive) return Api::message("Tes Ini Sedang Tidak Aktif", 403);

        $request->controller = ucwords($request->type) . "Controller";
        return $next($request);
    }
}
