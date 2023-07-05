<?php

namespace App\Models\Questions;

use App\Models\Answers\Wa as AnswersWa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wa extends Model
{
    use HasFactory;

    protected $table = "wa_questions";
    protected $hidden = ["key"];
    protected $guarded = ["id"];

    public function answer()
    {
        return $this->hasOne(AnswersWa::class, "wa_question_id");
    }
}
