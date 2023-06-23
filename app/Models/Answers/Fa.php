<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fa extends Model
{
    use HasFactory;

    protected $table = "fa_answers";
    protected $guarded = ["id"];
}
