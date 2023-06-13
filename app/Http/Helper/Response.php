<?php

namespace App\Http\Helper;

class Response
{
    public static function message(string $message, int $status = 500)
    {
        return response()->json(["message" => $message], $status);
    }

    public static function errors(\Illuminate\Validation\Validator $validator, int $status = 400)
    {
        return response()->json(["errors" => $validator->errors()], $status);
    }

    public static function success($data, int $status = 200)
    {
        return response()->json($data, $status);
    }
}
