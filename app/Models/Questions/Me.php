<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    use HasFactory;

    protected $table = "me_questions";
    protected $hidden = ["key"];
}
