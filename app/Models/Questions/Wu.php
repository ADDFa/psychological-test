<?php

namespace App\Models\Questions;

use App\Models\Answers\Wu as AnswersWu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wu extends Model
{
    use HasFactory;

    protected $table = "wu_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];

    public function answer()
    {
        return $this->hasOne(AnswersWu::class, "wu_question_id");
    }
}
