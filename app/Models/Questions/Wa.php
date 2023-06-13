<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wa extends Model
{
    use HasFactory;

    protected $table = "wa_questions";
    protected $hidden = ["key"];
    protected $guarded = ["id"];
}
