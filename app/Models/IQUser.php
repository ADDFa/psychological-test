<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IQUser extends Model
{
    use HasFactory;

    protected $table = "iq_users";
    protected $guarded = ["id"];

    public function norma()
    {
        return $this->belongsTo(IQNorma::class, "iq_norma_id");
    }
}
