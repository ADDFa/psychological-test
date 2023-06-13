<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class An extends Model
{
    use HasFactory;

    protected $table = "an_questions";
    protected $hidden = ["key"];
    protected $guarded = ["id"];
}
