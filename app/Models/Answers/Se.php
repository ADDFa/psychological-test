<?php

namespace App\Models\Answers;

use App\Models\Questions\Se as QuestionsSe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Se extends Model
{
    use HasFactory;

    protected $table = "se_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsSe::class, "se_question_id");
    }
}
