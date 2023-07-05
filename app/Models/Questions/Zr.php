<?php

namespace App\Models\Questions;

use App\Models\Answers\Zr as AnswersZr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zr extends Model
{
    use HasFactory;

    protected $table = "zr_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];

    public function answer()
    {
        return $this->hasOne(AnswersZr::class, "zr_question_id");
    }
}
