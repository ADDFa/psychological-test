<?php

namespace App\Models\Questions;

use App\Models\Answers\Fa as AnswersFa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fa extends Model
{
    use HasFactory;

    protected $table = "fa_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];

    public function answer()
    {
        return $this->hasOne(AnswersFa::class, "fa_question_id");
    }
}
