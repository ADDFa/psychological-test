<?php

namespace App\Models\Answers;

use App\Models\Questions\Ge as QuestionsGe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ge extends Model
{
    use HasFactory;

    protected $table = "ge_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsGe::class, "ge_question_id");
    }
}
