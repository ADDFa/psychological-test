<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IQNorma extends Model
{
    use HasFactory;

    protected $table = "iq_normas";
    protected $guarded = ["id"];
}
