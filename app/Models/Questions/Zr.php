<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zr extends Model
{
    use HasFactory;

    protected $table = "zr_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];
}
