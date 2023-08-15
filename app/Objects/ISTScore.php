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
use App\Models\User;
use App\Models\UserTest;

class ISTScore
{
    private static array $result = [];
    private static int $userId;
    private static int $examId;

    public static function classification($userId, $examId)
    {
        $iq = IQUser::with("norma")->where("user_id", $userId)->first();
        $classification = ISTClassification::where("user_id", $userId)->first();

        self::$result["iq"] = $iq;
        self::$result["classification"] = $classification;
        self::$userId = $userId;
        self::$examId = $examId;


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
            "se"    => Se::with("question")->where("user_id", self::$userId)->orderBy("se_question_id")->get(),
            "an"    => An::with("question")->where("user_id", self::$userId)->orderBy("an_question_id")->get(),
            "fa"    => Fa::with("question")->where("user_id", self::$userId)->orderBy("fa_question_id")->get(),
            "ge"    => Ge::with("question")->where("user_id", self::$userId)->orderBy("ge_question_id")->get(),
            "me"    => Me::with("question")->where("user_id", self::$userId)->orderBy("me_question_id")->get(),
            "ra"    => Ra::with("question")->where("user_id", self::$userId)->orderBy("ra_question_id")->get(),
            "wa"    => Wa::with("question")->where("user_id", self::$userId)->orderBy("wa_question_id")->get(),
            "wu"    => Wu::with("question")->where("user_id", self::$userId)->orderBy("wu_question_id")->get(),
            "zr"    => Zr::with("question")->where("user_id", self::$userId)->orderBy("zr_question_id")->get()
        ];
        return $this;
    }

    public function user()
    {
        self::$result["user"] = User::find(self::$userId);
        return $this;
    }

    public function userTest()
    {
        self::$result["user_test"] = UserTest::where("user_id", self::$userId)->where("exam_id", self::$examId)->first();
        return $this;
    }

    public function result()
    {
        return self::$result;
    }
}
