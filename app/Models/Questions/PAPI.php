<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PAPI extends Model
{
    use HasFactory;

    protected $table = "papi_questions";
    protected $guarded = ["id"];
}
