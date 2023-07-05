<?php

namespace App\Models\Questions;

use App\Models\Answers\Ra as AnswersRa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ra extends Model
{
    use HasFactory;

    protected $table = "ra_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];

    public function answer()
    {
        return $this->hasOne(AnswersRa::class, "ra_question_id");
    }
}
