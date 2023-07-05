<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ISTScore extends Model
{
    use HasFactory;

    protected $table = "ist_scores";
    protected $guarded = ["id"];
}
