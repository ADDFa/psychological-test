<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\ExamTime;
use App\Models\ParticipantTest;
use Illuminate\Http\Request;

class ParticipantTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = time();
        $participant = ParticipantTest::where("user_id", $request->user->id)->orderByDesc("end_exam_time")->first();
        $noTest = $participant ? ($participant->no_test + 1) : 1;
        $examTimes = ExamTime::all(["exam", "time"]);

        // check tes yang sedang berlangsung
        if ($participant && $participant->end_exam_time > $time) {
            return response()->json([
                "message"   => "Tes sedang berlangsung",
                "no_test"   => $participant->no_test
            ]);
        }

        function changeTime(&$time, $value)
        {
            $time += $value;
        }

        $participantTest = [];
        foreach ($examTimes as $examTime) {
            changeTime($time, (60 * $examTime->time));

            array_push($participantTest, [
                "no_test"       => $noTest,
                "user_id"       => $request->user->id,
                "end_exam_time" => $time,
                "exam"          => $examTime->exam
            ]);
        }

        return ParticipantTest::insert($participantTest) ?
            response()->json(["no_test" => $noTest]) :
            Response::message("Gagal mendaftarkan peserta test", 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantTest  $participantTest
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantTest $participantTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParticipantTest  $participantTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipantTest $participantTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantTest  $participantTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantTest $participantTest)
    {
        //
    }
}
