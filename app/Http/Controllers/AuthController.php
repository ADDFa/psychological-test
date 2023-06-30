<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Firebase\JWT\JWT;
use App\Models\Credential;
use App\Http\Helper\Response;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private static function tokens($user, $role)
    {
        $time = time();
        $accessPayload = [
            "user"  => $user,
            "role"  => $role,
            "exp"   => $time + 3600
            // "exp"   => $time + 20
        ];
        $refreshPayload = [
            "user"  => $user,
            "role"  => $role,
            "exp"   => $time + 604800
        ];

        try {
            return [
                "token_access"  => JWT::encode($accessPayload, env("JWT_SECRET"), "HS256"),
                "token_refresh" => JWT::encode($refreshPayload, env("JWT_REFRESH"), "HS256")
            ];
        } catch (Exception $e) {
            return Response::message($e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "username"  => "required|string",
            "password"  => "required|string"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        $credential = Credential::find($request->username);
        if (!$credential || !password_verify($request->password, $credential->password)) {
            return Response::message("Username atau Password salah!", 400);
        }

        $user = User::find($credential->user_id);
        return self::tokens($user, $credential->role);
    }

    public function refreshToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "token"  => "required|string"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        try {
            $payload = JWT::decode($request->token, new Key(env("JWT_REFRESH"), "HS256"));
            return self::tokens($payload->user, $payload->role);
        } catch (Exception $e) {
            return Response::message($e->getMessage());
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
            "special_education" => "string",
            "username"          => "required|unique:credentials,username|string",
            "password"          => "required|string|min:8"
        ]);
        if ($validator->fails()) return Response::errors($validator);

        try {
            DB::transaction(function () use ($request) {
                $user = new User;
                $user->name = $request->name;
                $user->gender = $request->gender;
                $user->birthplace = $request->birthplace;
                $user->date_of_birth = $request->date_of_birth;
                $user->general_education = $request->general_education;
                $user->special_education = $request->special_education;
                $user->save();

                $credential = new Credential;
                $credential->user_id = $user->id;
                $credential->username = $request->username;
                $credential->password = password_hash($request->password, PASSWORD_DEFAULT);
                $credential->save();
            });

            return Response::message("Registrasi Berhasil", 200);
        } catch (Exception $e) {
            return Response::message("Transaksi Gagal: " . $e->getMessage());
        }
    }
}
