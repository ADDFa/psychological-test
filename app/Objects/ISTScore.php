<?php

namespace App\Objects;

use App\Models\Answers\An;
use App\Models\Answers\Fa;
use App\Models\Answers\Ge;
use App\Models\Answers\Me;
use App\Models\Answers\Ra;
use App\Models\Answers\Se;
use App\Models\Answers\Wa;
use App\Models\Answers\Wu;
use App\Models\Answers\Zr;
use App\Models\IQUser;
use App\Models\ISTClassification;
use App\Models\ISTScore as ModelsISTScore;

class ISTScore
{
    private static array $result = [];
    private static int $userId;

    public static function classification($userId)
    {
        self::$result["iq"] = IQUser::with("norma")->where("user_id", $userId)->first();
        self::$result["classification"] = ISTClassification::where("user_id", $userId)->first();
        self::$userId = $userId;
        return new static();
    }

    public function scores()
    {
        self::$result["scores"] = ModelsISTScore::where("user_id", self::$userId)->get();
        return $this;
    }

    public function answers()
    {
        self::$result["answers"] = [
            "se"    => Se::with("question")->get(),
            "an"    => An::with("question")->get(),
            "fa"    => Fa::with("question")->get(),
            "ge"    => Ge::with("question")->get(),
            "me"    => Me::with("question")->get(),
            "ra"    => Ra::with("question")->get(),
            "wa"    => Wa::with("question")->get(),
            "wu"    => Wu::with("question")->get(),
            "zr"    => Zr::with("question")->get(),
        ];
        return $this;
    }

    public function result()
    {
        return self::$result;
    }
}
