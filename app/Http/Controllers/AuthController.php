<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Http\Res\Api;
use Firebase\JWT\JWT;
use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private function generateToken($payload): array
    {
        $time = time();
        $accessExp = $time + 3600;
        $refreshExp = $time + (3600 * 24 * 7);

        $getPayload = function (int $exp) use (&$payload, &$time) {
            return [
                "user"  => $payload,
                "exp"   => $exp,
                "iat"   => $time
            ];
        };

        return [
            "token_access"  => JWT::encode($getPayload($accessExp), env("JWT_SECRET"), "HS256"),
            "token_refresh" => JWT::encode($getPayload($refreshExp), env("JWT_SECRET"), "HS256")
        ];
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "username"  => "required|exists:credentials,username",
            "password"  => "required"
        ]);

        if ($validator->fails()) return Api::errors($validator, 400);

        $credential = Credential::where("username", $request->username)->first();
        // validasi password
        if (!password_verify($request->password, $credential->password)) {
            return Api::message("Username atau Password salah!", 400);
        }

        $user = User::find($credential->user_id);

        try {
            return response()->json($this->generateToken($user));
        } catch (Exception $e) {
            return Api::message($e->getMessage(), 500);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"              => "required|string",
            "gender"            => [
                "required",
                Rule::in(["P", "L"])
            ],
            "birthplace"        => "required|string",
            "date_of_birth"     => "required|date_format:Y-m-d",
            "general_education" => "required|string",
            "special_education" => "required|string",
            "username"          => "required|unique:credentials,username|string",
            "password"          => "required|string"
        ]);

        if ($validator->fails()) return Api::errors($validator, 400);

        DB::transaction(function () use ($request) {
            $user = new User;
            $user->name     = $request->name;
            $user->gender     = $request->gender;
            $user->birthplace     = $request->birthplace;
            $user->date_of_birth     = $request->date_of_birth;
            $user->general_education     = $request->general_education;
            $user->special_education     = $request->special_education;
            $user->save();

            $credential = new Credential;
            $credential->user_id = $user->id;
            $credential->username = $request->username;
            $credential->password = password_hash($request->password, PASSWORD_DEFAULT);
            $credential->role = "user";
            $credential->save();
        });

        return Api::message("Berhasil menambahkan user baru", 200);
    }
}
