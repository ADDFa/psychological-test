<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WuImage extends Model
{
    use HasFactory;

    protected $table = "wu_image_questions";
    protected $guarded = ["id"];

    public function questions()
    {
        return $this->hasMany(Wu::class);
    }
}
