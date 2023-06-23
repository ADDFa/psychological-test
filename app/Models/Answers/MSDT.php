<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSDT extends Model
{
    use HasFactory;

    protected $table = "msdt_answers";
    protected $guarded = ["id"];
}
