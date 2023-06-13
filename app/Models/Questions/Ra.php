<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ra extends Model
{
    use HasFactory;

    protected $table = "ra_questions";
    protected $guarded = ["id"];
    protected $hidden = ["key"];
}
