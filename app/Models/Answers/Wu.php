<?php

namespace App\Models\Answers;

use App\Models\Questions\Wu as QuestionsWu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wu extends Model
{
    use HasFactory;

    protected $table = "wu_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsWu::class, "wu_question_id");
    }
}
