<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ISTClassification extends Model
{
    use HasFactory;

    protected $table = "ist_user_classifications";
    protected $guarded = ["id"];
}
