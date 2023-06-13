<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fa extends Model
{
    use HasFactory;

    protected $table = "fa_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];
}
