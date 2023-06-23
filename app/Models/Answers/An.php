<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class An extends Model
{
    use HasFactory;

    protected $table = "an_answers";
    protected $guarded = ["id"];
}
