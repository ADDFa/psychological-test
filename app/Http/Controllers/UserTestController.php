<?php

namespace App\Http\Controllers;

use App\Http\Helper\Response;
use App\Models\User;
use App\Models\UserTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "from"  => "integer|exists:users,id"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $limit = 2;
        $result = User::with("userTest");

        if ($request->from) {
            $result->where("id", "<", $request->from);
        }

        return $result->orderBy("id", "desc")->limit($limit)->get();
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
            "user_id"   => "required|exists:users,id",
            "exam_id"   => "required|exists:exams,id"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $userTest = new UserTest([
            "user_id"   => $request->user_id,
            "exam_id"   => $request->exam_id
        ]);
        return Response::success($userTest->save());
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
}
