<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Se extends Model
{
    use HasFactory;

    protected $table = "questions_se";
    protected $hidden = ["key"];
}
