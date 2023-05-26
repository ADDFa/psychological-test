<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WuImage extends Model
{
    use HasFactory;

    protected $table = "questions_wu_image";
    protected $hidden = ["key"];
}
