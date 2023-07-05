<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTestDeadline extends Model
{
    use HasFactory;

    protected $table = "user_test_deadline";
    protected $guarded = ["id"];

    public function userTest()
    {
        return $this->belongsTo(UserTest::class);
    }

    public function questionCategory()
    {
        return $this->belongsTo(QuestionCategory::class);
    }
}
