<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("question_categories")->insert([
            [
                "category"  => "se",
                "time"  => 360,
                "total_question" => 20
            ],
            [
                "category"  => "wa",
                "time"  => 360,
                "total_question" => 20
            ],
            [
                "category"  => "an",
                "time"  => 420,
                "total_question" => 20
            ],
            [
                "category"  => "ge",
                "time"  => 480,
                "total_question" => 16
            ],
            [
                "category"  => "ra",
                "time"  => 600,
                "total_question" => 20
            ],
            [
                "category"  => "zr",
                "time"  => 420,
                "total_question" => 20
            ],
            [
                "category"  => "fa",
                "time"  => 540,
                "total_question" => 20
            ],
            [
                "category"  => "wu",
                "time"  => 540,
                "total_question" => 20
            ],
            [
                "category"  => "me",
                "time"  => 420,
                "total_question" => 20
            ],
            [
                "category"  => "msdt",
                "time"  => 1500,
                "total_question" => 62
            ],
            [
                "category"  => "papi",
                "time"  => 1200,
                "total_question" => 90
            ]
        ]);
    }
}
