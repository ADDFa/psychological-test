<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ge extends Model
{
    use HasFactory;

    protected $table = "ge_questions";
    protected $guarded = ["id"];
}
