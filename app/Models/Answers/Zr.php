<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zr extends Model
{
    use HasFactory;

    protected $table = "zr_answers";
    protected $guarded = ["id"];
}
