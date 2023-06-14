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
                "time"  => 360
            ],
            [
                "category"  => "wa",
                "time"  => 360
            ],
            [
                "category"  => "an",
                "time"  => 420
            ],
            [
                "category"  => "ge",
                "time"  => 480
            ],
            [
                "category"  => "ra",
                "time"  => 600
            ],
            [
                "category"  => "zr",
                "time"  => 420
            ],
            [
                "category"  => "fa",
                "time"  => 540
            ],
            [
                "category"  => "wu",
                "time"  => 540
            ],
            [
                "category"  => "me",
                "time"  => 420
            ],
            [
                "category"  => "msdt",
                "time"  => 1500
            ],
            [
                "category"  => "papi",
                "time"  => 1200
            ]
        ]);
    }
}
