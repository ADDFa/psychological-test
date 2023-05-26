<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fa extends Model
{
    use HasFactory;

    protected $table = "questions_fa";

    public function images()
    {
        return $this->hasMany(FaImage::class, "question_fa_id")
            ->join("images", "questions_fa_image.image_id", "=", "images.id");
    }
}
