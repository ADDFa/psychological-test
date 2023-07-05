<?php

namespace App\Objects;

use App\Http\Helper\Response;
use App\Models\IQNorma;
use App\Models\IQUser;
use App\Models\ISTClassification;
use App\Models\ISTGestamt;
use App\Models\ISTNorma;
use App\Models\ISTScore;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;

class ISTScorring
{
    protected $user = null, $norma = null, $userAge = 0;
    protected array $userAnswers = [], $istAnswerList = ["Se", "Wa", "An", "Ra", "Zr", "Fa", "Wu", "Me", "Ge"], $scores = [];
    protected string $userAgeBetween = "21,22,23,24,25";

    private function initialize(int $userId)
    {
        $user = User::find($userId);
        if (!$user) throw new HttpResponseException(Response::message("User Not Found", 404));

        $this->user = $user;
        $this->generateUserAgeBetween();
        $this->setNorma();
        $this->initializeUserAnswers();
        $this->saveUserScore();
    }

    private function generateUserAgeBetween()
    {
        $year = date("Y");
        $yearOfBirth = date("Y", strtotime($this->user->date_of_birth));
        $age = $year - $yearOfBirth;

        $userAge = floor($age / 5) * 5;
        $userAgeBetween = "";
        for ($i = 1; $i <= 5; $i++) {
            $userAgeBetween .= $userAge + $i;
            if ($i < 5) $userAgeBetween .= ",";
        }

        $this->userAgeBetween = $userAgeBetween;
    }

    private function scoreBuilder($userId, $category, $rw)
    {
        $sw = \App\Models\ISTNorma::where("question_category", $category)->where("rw", $rw)->value("sw");
        $date = date("Y-m-d H:i:s");

        return [
            "user_id"           => $userId,
            "question_category" => $category,
            "rw_score"          => $rw,
            "sw_score"          => $sw,
            "created_at"        => $date,
            "updated_at"        => $date
        ];
    }

    private function setNorma()
    {
        $norma = ISTNorma::where("ages", $this->userAgeBetween)->first();
        if (!$norma) $this->userAgeBetween = "26,27,28,29,30";
        $norma = ISTNorma::where("ages", $this->userAgeBetween)->first();

        $this->norma = $norma;
    }

    private function initializeUserAnswers()
    {
        foreach ($this->istAnswerList as $answer) {
            if ($answer !== "Ge") {
                $userAnswer = "\App\Models\Answers\\$answer"::where("user_id", $this->user->id)->where("correct", true)->count();
                array_push($this->userAnswers, [
                    "category"  => $answer,
                    "answers"   => $userAnswer
                ]);
            }
        }
    }

    private function getClassification(int $sw): int
    {
        if ($sw <= 79) {
            return 1;
        } elseif ($sw >= 80 && $sw <= 89) {
            return 2;
        } elseif ($sw >= 90 && $sw <= 109) {
            return 3;
        } elseif ($sw >= 110 && $sw <= 119) {
            return 4;
        } else {
            return 5;
        }
    }

    private function getSwScoreByCategory($category): int
    {
        $result = 0;
        $scores = $this->scores;

        for ($i = 0; $i < count($scores); $i++) {
            if (strcasecmp($scores[$i]["question_category"], $category) === 0) {
                $result = $scores[$i]["sw_score"];
                break;
            }
        }

        return $result;
    }

    private function saveUserScore()
    {
        $scores = [];
        foreach ($this->istAnswerList as $istAnswerCategory) {
            if ($istAnswerCategory === "Ge") {
                $point = "\App\Models\Answers\Ge"::where("user_id", $this->user->id)
                    ->where("point", ">", 0)->get()->sum("point");
                $conversion = \App\Models\QuestionGe\Conversion::where("total", $point)->value("conversion");
                array_push($scores, $this->scoreBuilder($this->user->id, strtolower($istAnswerCategory), $conversion));
            } else {
                $totalCorrect = "\App\Models\Answers\\$istAnswerCategory"::where("user_id", $this->user->id)
                    ->where("correct", true)->count();
                array_push($scores, $this->scoreBuilder($this->user->id, strtolower($istAnswerCategory), $totalCorrect));
            }
        }

        $this->scores = $scores;
        if (!ISTScore::where("user_id", $this->user->id)->first()) {
            ISTScore::insert($scores);
            $this->saveClassification();
            $this->saveIq();
        }
    }

    private function saveClassification()
    {
        $swZr = $this->getSwScoreByCategory("zr");
        $swAn = $this->getSwScoreByCategory("an");
        $swWu = $this->getSwScoreByCategory("wu");
        $swSe = $this->getSwScoreByCategory("se");
        $swGe = $this->getSwScoreByCategory("ge");
        $swWa = $this->getSwScoreByCategory("wa");
        $swMe = $this->getSwScoreByCategory("me");

        $comprehension = $this->getClassification($swSe);
        $problemAnalysis = $this->getClassification(($swAn + $swWu) / 2);
        $flexibilityOfThinking = $this->getClassification(($swZr + $swWu + $swAn) / 3);
        $verbalLogic = $this->getClassification(($swGe + $swWa) / 2);
        $memoryAndConcntration = $this->getClassification($swMe);

        $clasification = new ISTClassification([
            "user_id"                   => $this->user->id,
            "comprehension"             => $comprehension,
            "problem_analysis"          => $problemAnalysis,
            "flexibility_of_thinking"   => $flexibilityOfThinking,
            "verbal_logic"              => $verbalLogic,
            "memory_and_concentration"  => $memoryAndConcntration
        ]);

        if (!ISTClassification::where("user_id", $this->user->id)->first()) {
            $clasification->save();
        }
    }

    private function saveIq()
    {
        $rwTotal = collect($this->scores)->sum("rw_score");
        $swGesamt = ISTGestamt::where("ages", $this->userAgeBetween)->where("rw", ">=", $rwTotal)->orderBy("rw", "asc")->value("sw");
        if (!$swGesamt) $swGesamt = ISTGestamt::where("ages", $this->userAgeBetween)->orderBy("rw", "desc")->value("sw");

        $iqNormaId = IQNorma::where("sw", ">=", $swGesamt)->orderBy("sw", "asc")->value("id");
        if (!$iqNormaId) $iqNormaId = IQNorma::orderBy("sw", "desc")->value("id");

        if (!IQUser::where("user_id", $this->user->id)->first()) {
            $iqUser = new IQUser([
                "user_id"       => $this->user->id,
                "iq_norma_id"   => $iqNormaId
            ]);
            $iqUser->save();
        }
    }

    public function __construct(int $userId)
    {
        $this->initialize($userId);
    }
}
