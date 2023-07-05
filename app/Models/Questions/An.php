<?php

namespace App\Models\Questions;

use App\Models\Answers\An as AnswersAn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class An extends Model
{
    use HasFactory;

    protected $table = "an_questions";
    protected $hidden = ["key"];
    protected $guarded = ["id"];

    public function answer()
    {
        return $this->hasOne(AnswersAn::class, "an_question_id");
    }
}
