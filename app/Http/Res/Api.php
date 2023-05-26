<?php

namespace App\Http\Res;

class Api
{
    public static function message(string $message)
    {
        // 
    }

    public static function errors(\Illuminate\Validation\Validator $validator)
    {
        return ["errors" => $validator->errors()];
    }
}
