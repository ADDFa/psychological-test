<?php

namespace App\Models\Answers;

use App\Models\Questions\An as QuestionsAn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class An extends Model
{
    use HasFactory;

    protected $table = "an_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsAn::class, "an_question_id");
    }
}
