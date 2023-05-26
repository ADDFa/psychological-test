<?php

namespace App\Http\Controllers;

use App\Http\Res\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ExamController extends Controller
{
    private function checkType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "type"  => [
                "required",
                Rule::in(["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me"])
            ]
        ]);

        return $validator->fails() ? response()->json(Api::errors($validator)) : true;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $isType = $this->checkType($request);
        if ($isType !== true) return $isType;

        $controller = ucwords($request->type) . "Controller";
        return app()->call("App\Http\Controllers\Questions\\$controller@index");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ["test" => $id];
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

    public function image(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "file_name" => "required|string"
        ]);
        // 
    }
}
