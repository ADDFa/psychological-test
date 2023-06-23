<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Se extends Model
{
    use HasFactory;

    protected $table = "se_answers";
    protected $guarded = ["id"];
}
