<?php

namespace App\Models\Questions;

use App\Models\Answers\Ge as AnswersGe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ge extends Model
{
    use HasFactory;

    protected $table = "ge_questions";
    protected $guarded = ["id"];

    public function answer()
    {
        return $this->hasOne(AnswersGe::class, "ge_question_id");
    }
}
