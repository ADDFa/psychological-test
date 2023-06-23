<?php

namespace App\Models\Questions;

use App\Models\Answers\Se as AnswersSe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Se extends Model
{
    use HasFactory;

    protected $table = "se_questions";
    protected $hidden = ["key"];
    protected $guarded = ["id"];
}
