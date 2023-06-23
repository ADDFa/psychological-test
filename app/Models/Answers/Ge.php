<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ge extends Model
{
    use HasFactory;

    protected $table = "ge_answers";
    protected $guarded = ["id"];
}
