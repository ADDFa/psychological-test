<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSDT extends Model
{
    use HasFactory;

    protected $table = "msdt_questions";
    protected $guarded = ["id"];
}
