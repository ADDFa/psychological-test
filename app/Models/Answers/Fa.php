<?php

namespace App\Models\Answers;

use App\Models\Questions\Fa as QuestionsFa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fa extends Model
{
    use HasFactory;

    protected $table = "fa_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsFa::class, "fa_question_id");
    }
}
