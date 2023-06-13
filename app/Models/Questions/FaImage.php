<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaImage extends Model
{
    use HasFactory;

    protected $table = "fa_image_questions";
    protected $guarded = ["id"];

    public function questions()
    {
        return $this->hasMany(Fa::class);
    }
}
