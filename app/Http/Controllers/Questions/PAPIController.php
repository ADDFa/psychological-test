<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Questions\PAPI;
use Illuminate\Http\Request;

class PAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(PAPI::all());
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
     * @param  \App\Models\Questions\PAPI  $pAPI
     * @return \Illuminate\Http\Response
     */
    public function show(PAPI $pAPI)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions\PAPI  $pAPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PAPI $pAPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions\PAPI  $pAPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(PAPI $pAPI)
    {
        //
    }
}
