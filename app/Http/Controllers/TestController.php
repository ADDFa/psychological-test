<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\QuestionCategory;
use App\Models\TestParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
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
        $validator = Validator::make($request->all(), [
            "user_id"                   => "required|exists:users,id",
            "question_category_id"      => "required|exists:question_categories,id"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $category = QuestionCategory::find($request->question_category_id);
        $time = time();

        $testParticipant = new TestParticipant([
            "user_id"               => $request->user_id,
            "question_category_id"  => $request->question_category_id
        ]);
        $testParticipant->end_test = $time + $category->time;
        $testParticipant->save();

        return $testParticipant;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
