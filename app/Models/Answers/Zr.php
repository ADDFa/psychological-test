<?php

namespace App\Models\Answers;

use App\Models\Questions\Zr as QuestionsZr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zr extends Model
{
    use HasFactory;

    protected $table = "zr_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsZr::class, "zr_question_id");
    }
}
