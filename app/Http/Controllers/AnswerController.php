<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $category)
    {
        $data = $request->all() + ["category" => $category];
        $validator = Validator::make($data, [
            "category"  => "required|exists:question_categories,category",
            "user_id"   => "required|exists:users,id"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        // admin validator
        $credential = Credential::where("user_id", $request->user->id)->first();
        if ($credential->role === "user" && intval($request->user_id) !== $request->user->id) {
            return Response::message("Only admin can access");
        }

        $result = DB::table("{$category}_answers")->where("user_id", $request->user_id)
            ->orderBy("{$request->category}_question_id")->get();
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
        $validator = Validator::make($request->all(), [
            "category" => "required|exists:question_categories,category"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $controller = ucwords($request->category) . "Controller";
        return app()->call("\App\Http\Controllers\Answers\\{$controller}@store", [
            "category" => $request->category
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $category, $question_id)
    {
        $data = $request->all() + ["category" => $category];
        $validator = Validator::make($data, [
            "category"  => "required|exists:question_categories,category",
            "user_id"   => "required|exists:users,id"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        // admin validator
        $credential = Credential::where("user_id", $request->user->id)->first();
        if ($credential->role === "user" && intval($request->user_id) !== $request->user->id) {
            return Response::message("Only admin can access");
        }

        $result = DB::table("{$category}_answers")
            ->where("{$category}_question_id", $question_id)
            ->where("user_id", $request->user_id)->first();

        return Response::success($result);
    }
}
