<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    use HasFactory;

    protected $primaryKey = "category";
    public $incrementing = false;

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
