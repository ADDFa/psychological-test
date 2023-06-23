<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ra extends Model
{
    use HasFactory;

    protected $table = "ra_answers";
    protected $guarded = ["id"];
}
