<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaImage extends Model
{
    use HasFactory;

    protected $table = "questions_fa_image";
    protected $hidden = ["key"];
}
