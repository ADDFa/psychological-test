<?php

namespace App\Http\Res;

class Api
{
    public static function message(string $message, $status)
    {
        return response()->json(["message" => $message], $status);
    }

    public static function errors(\Illuminate\Validation\Validator $validator, $status)
    {
        return response()->json(["errors" => $validator->errors()], $status);
    }
}
