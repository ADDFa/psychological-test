<?php

namespace App\Models\Answers;

use App\Models\Questions\Me as QuestionsMe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    use HasFactory;

    protected $table = "me_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsMe::class, "me_question_id");
    }
}
