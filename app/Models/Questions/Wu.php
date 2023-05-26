<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wu extends Model
{
    use HasFactory;

    protected $table = "questions_wu";

    public function images()
    {
        return $this->hasMany(WuImage::class, "question_wu_id")
            ->join("images", "questions_wu_image.image_id", "=", "images.id");
    }
}
