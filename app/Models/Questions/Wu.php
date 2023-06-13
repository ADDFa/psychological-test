<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wu extends Model
{
    use HasFactory;

    protected $table = "wu_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];
}
