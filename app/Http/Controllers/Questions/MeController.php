<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\QuestionController;
use App\Http\Helper\Response;
use App\Models\MeWord;
use App\Models\Questions\Me;
use Illuminate\Http\Request;

class MeController extends QuestionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::success(Me::all());
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

    public function words()
    {
        return response()->json(MeWord::with("subWords")->get());
    }
}
