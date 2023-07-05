<?php

namespace App\Models\Answers;

use App\Models\Questions\Wa as QuestionsWa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wa extends Model
{
    use HasFactory;

    protected $table = "wa_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsWa::class, "wa_question_id");
    }
}
