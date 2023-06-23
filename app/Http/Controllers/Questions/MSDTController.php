<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Http\Helper\Response;
use App\Models\QuestionCategory;
use App\Models\Questions\MSDT;
use Illuminate\Http\Request;

class MSDTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [
            "questions" => MSDT::all(),
            "category"  => QuestionCategory::where("category", "msdt")->first()
        ];

        return Response::success($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions\MSDT  $mSDT
     * @return \Illuminate\Http\Response
     */
    public function show(MSDT $mSDT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions\MSDT  $mSDT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSDT $mSDT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions\MSDT  $mSDT
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSDT $mSDT)
    {
        //
    }

    public function answer(MSDT $question)
    {
        // 
    }
}
