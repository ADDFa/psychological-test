<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PAPI extends Model
{
    use HasFactory;

    protected $table = "papi_answers";
    protected $guarded = ["id"];
}
