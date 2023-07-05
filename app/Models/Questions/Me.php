<?php

namespace App\Models\Questions;

use App\Models\Answers\Me as AnswersMe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    use HasFactory;

    protected $table = "me_questions";
    protected $hidden = ["key"];

    public function answer()
    {
        return $this->hasOne(AnswersMe::class, "me_question_id");
    }
}
