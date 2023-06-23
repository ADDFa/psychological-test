<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wu extends Model
{
    use HasFactory;

    protected $table = "wu_answers";
    protected $guarded = ["id"];
}
