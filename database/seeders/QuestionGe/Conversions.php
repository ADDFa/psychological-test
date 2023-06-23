<?php

namespace Database\Seeders\QuestionGe;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Conversions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ge_conversions")->insert([
            [
                "total"         => 1,
                "conversion"    => 1
            ],
            [
                "total"         => 2,
                "conversion"    => 2
            ],
            [
                "total"         => 3,
                "conversion"    => 3
            ],
            [
                "total"         => 4,
                "conversion"    => 4
            ],
            [
                "total"         => 5,
                "conversion"    => 5
            ],
            [
                "total"         => 6,
                "conversion"    => 5
            ],
            [
                "total"         => 7,
                "conversion"    => 6
            ],
            [
                "total"         => 8,
                "conversion"    => 6
            ],
            [
                "total"         => 9,
                "conversion"    => 7
            ],
            [
                "total"         => 10,
                "conversion"    => 7
            ],
            [
                "total"         => 11,
                "conversion"    => 8
            ],
            [
                "total"         => 12,
                "conversion"    => 8
            ],
            [
                "total"         => 13,
                "conversion"    => 9
            ],
            [
                "total"         => 14,
                "conversion"    => 9
            ],
            [
                "total"         => 15,
                "conversion"    => 10
            ],
            [
                "total"         => 16,
                "conversion"    => 10
            ],
            [
                "total"         => 17,
                "conversion"    => 11
            ],
            [
                "total"         => 18,
                "conversion"    => 11
            ],
            [
                "total"         => 19,
                "conversion"    => 12
            ],
            [
                "total"         => 20,
                "conversion"    => 12
            ],
            [
                "total"         => 21,
                "conversion"    => 13
            ],
            [
                "total"         => 22,
                "conversion"    => 13
            ],
            [
                "total"         => 23,
                "conversion"    => 14
            ],
            [
                "total"         => 24,
                "conversion"    => 14
            ],
            [
                "total"         => 25,
                "conversion"    => 15
            ],
            [
                "total"         => 26,
                "conversion"    => 15
            ],
            [
                "total"         => 27,
                "conversion"    => 16
            ],
            [
                "total"         => 28,
                "conversion"    => 17
            ],
            [
                "total"         => 29,
                "conversion"    => 18
            ],
            [
                "total"         => 30,
                "conversion"    => 19
            ],
            [
                "total"         => 31,
                "conversion"    => 20
            ]
        ]);
    }
}
