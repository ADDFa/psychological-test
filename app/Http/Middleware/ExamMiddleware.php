<?php

namespace App\Http\Middleware;

use App\Http\Res\Api;
use App\Models\Exam;
use App\Models\ParticipantTest;
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
            ],
            "no_test"   => "required|exists:participant_test,no_test"
        ]);

        if ($validator->fails()) return Api::errors($validator, 400);

        $exam = $request->type;
        if (array_search($exam, $ISTExam) !== false) {
            $exam = "ist";
        }
        $isExamActive = Exam::where("exam", "like", "%$exam%")->first()->active;
        if (!$isExamActive) return Api::message("Tes Ini Sedang Tidak Aktif", 403);

        // cek waktu ujian
        $endExamTime = ParticipantTest::where("no_test", $request->no_test)->where("exam", "like", "%{$request->type}%")->first()->end_exam_time;
        if ($endExamTime < time()) {
            return Api::message("Waktu ujian habis!", 400);
        }

        $request->controller = ucwords($request->type) . "Controller";
        return $next($request);
    }
}
