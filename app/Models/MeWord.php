<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeWord extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function subWords()
    {
        return $this->hasMany(MeSubWord::class);
    }
}
