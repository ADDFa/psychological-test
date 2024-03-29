<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;

    protected $primaryKey = "username";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
