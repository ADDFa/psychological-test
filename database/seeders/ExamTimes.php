<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                "time"  => 10
            ],
            [
                "exam"  => "an",
                "time"  => 10
            ],
            [
                "exam"  => "ge",
                "time"  => 6
            ],
            [
                "exam"  => "ra",
                "time"  => 6
            ],
            [
                "exam"  => "zr",
                "time"  => 6
            ],
            [
                "exam"  => "fa",
                "time"  => 6
            ],
            [
                "exam"  => "wu",
                "time"  => 6
            ],
            [
                "exam"  => "me",
                "time"  => 6
            ],
            [
                "exam"  => "msdt",
                "time"  => 6
            ],
            [
                "exam"  => "papi",
                "time"  => 6
            ]
        ]);
    }
}
