<?php

namespace App\Models\Answers;

use App\Models\Questions\Ra as QuestionsRa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ra extends Model
{
    use HasFactory;

    protected $table = "ra_answers";
    protected $guarded = ["id"];

    public function question()
    {
        return $this->belongsTo(QuestionsRa::class, "ra_question_id");
    }
}
