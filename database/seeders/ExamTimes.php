<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamTimes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("exam_times")->insert([
            [
                "exam"  => "se",
                "time"  => 6
            ],
            [
                "exam"  => "wa",
                "time"  => 6
            ],
            [
                "exam"  => "an",
                "time"  => 7
            ],
            [
                "exam"  => "ge",
                "time"  => 8
            ],
            [
                "exam"  => "ra",
                "time"  => 10
            ],
            [
                "exam"  => "zr",
                "time"  => 7
            ],
            [
                "exam"  => "fa",
                "time"  => 9
            ],
            [
                "exam"  => "wu",
                "time"  => 9
            ],
            [
                "exam"  => "me",
                "time"  => 7
            ],
            [
                "exam"  => "msdt",
                "time"  => 25
            ],
            [
                "exam"  => "papi",
                "time"  => 20
            ]
        ]);
    }
}
