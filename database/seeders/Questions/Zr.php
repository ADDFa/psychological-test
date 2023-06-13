<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Zr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("zr_questions")->insert([
            [
                "first_number"      => 6,
                "second_number"     => 9,
                "thrid_number"      => 12,
                "fourth_number"     => 15,
                "fifth_number"      => 18,
                "sixth_number"      => 21,
                "seventh_number"    => 24,
                "key"               => md5(27)
            ],

            [
                "first_number"      => 15,
                "second_number"     => 16,
                "thrid_number"      => 18,
                "fourth_number"     => 19,
                "fifth_number"      => 21,
                "sixth_number"      => 22,
                "seventh_number"    => 24,
                "key"               => md5(25)
            ],

            [
                "first_number"      => 19,
                "second_number"     => 18,
                "thrid_number"      => 22,
                "fourth_number"     => 21,
                "fifth_number"      => 25,
                "sixth_number"      => 24,
                "seventh_number"    => 28,
                "key"               => md5(27)
            ],

            [
                "first_number"      => 16,
                "second_number"     => 12,
                "thrid_number"      => 17,
                "fourth_number"     => 13,
                "fifth_number"      => 18,
                "sixth_number"      => 14,
                "seventh_number"    => 29,
                "key"               => md5(15)
            ],

            [
                "first_number"      => 2,
                "second_number"     => 4,
                "thrid_number"      => 8,
                "fourth_number"     => 10,
                "fifth_number"      => 20,
                "sixth_number"      => 22,
                "seventh_number"    => 44,
                "key"               => md5(46)
            ],

            [
                "first_number"      => 15,
                "second_number"     => 13,
                "thrid_number"      => 16,
                "fourth_number"     => 12,
                "fifth_number"      => 17,
                "sixth_number"      => 11,
                "seventh_number"    => 18,
                "key"               => md5(10)
            ],

            [
                "first_number"      => 25,
                "second_number"     => 22,
                "thrid_number"      => 11,
                "fourth_number"     => 33,
                "fifth_number"      => 30,
                "sixth_number"      => 15,
                "seventh_number"    => 45,
                "key"               => md5(42)
            ],

            [
                "first_number"      => 49,
                "second_number"     => 51,
                "thrid_number"      => 54,
                "fourth_number"     => 27,
                "fifth_number"      => 9,
                "sixth_number"      => 11,
                "seventh_number"    => 14,
                "key"               => md5(7)
            ],

            [
                "first_number"      => 2,
                "second_number"     => 3,
                "thrid_number"      => 1,
                "fourth_number"     => 3,
                "fifth_number"      => 4,
                "sixth_number"      => 2,
                "seventh_number"    => 4,
                "key"               => md5(5)
            ],

            [
                "first_number"      => 19,
                "second_number"     => 17,
                "thrid_number"      => 20,
                "fourth_number"     => 16,
                "fifth_number"      => 21,
                "sixth_number"      => 15,
                "seventh_number"    => 22,
                "key"               => md5(14)
            ],

            [
                "first_number"      => 94,
                "second_number"     => 92,
                "thrid_number"      => 46,
                "fourth_number"     => 44,
                "fifth_number"      => 22,
                "sixth_number"      => 20,
                "seventh_number"    => 10,
                "key"               => md5(8)
            ],

            [
                "first_number"      => 5,
                "second_number"     => 8,
                "thrid_number"      => 9,
                "fourth_number"     => 8,
                "fifth_number"      => 11,
                "sixth_number"      => 12,
                "seventh_number"    => 11,
                "key"               => md5(14)
            ],

            [
                "first_number"      => 12,
                "second_number"     => 15,
                "thrid_number"      => 19,
                "fourth_number"     => 23,
                "fifth_number"      => 28,
                "sixth_number"      => 33,
                "seventh_number"    => 39,
                "key"               => md5(45)
            ],

            [
                "first_number"      => 7,
                "second_number"     => 5,
                "thrid_number"      => 10,
                "fourth_number"     => 7,
                "fifth_number"      => 21,
                "sixth_number"      => 17,
                "seventh_number"    => 68,
                "key"               => md5(63)
            ],

            [
                "first_number"      => 11,
                "second_number"     => 15,
                "thrid_number"      => 18,
                "fourth_number"     => 9,
                "fifth_number"      => 13,
                "sixth_number"      => 16,
                "seventh_number"    => 8,
                "key"               => md5(12)
            ],

            [
                "first_number"      => 3,
                "second_number"     => 8,
                "thrid_number"      => 15,
                "fourth_number"     => 24,
                "fifth_number"      => 35,
                "sixth_number"      => 48,
                "seventh_number"    => 63,
                "key"               => md5(80)
            ],

            [
                "first_number"      => 4,
                "second_number"     => 5,
                "thrid_number"      => 7,
                "fourth_number"     => 4,
                "fifth_number"      => 8,
                "sixth_number"      => 13,
                "seventh_number"    => 7,
                "key"               => md5(14)
            ],

            [
                "first_number"      => 8,
                "second_number"     => 5,
                "thrid_number"      => 15,
                "fourth_number"     => 18,
                "fifth_number"      => 6,
                "sixth_number"      => 3,
                "seventh_number"    => 9,
                "key"               => md5(12)
            ],

            [
                "first_number"      => 15,
                "second_number"     => 6,
                "thrid_number"      => 18,
                "fourth_number"     => 10,
                "fifth_number"      => 30,
                "sixth_number"      => 23,
                "seventh_number"    => 69,
                "key"               => md5(63)
            ],

            [
                "first_number"      => 5,
                "second_number"     => 35,
                "thrid_number"      => 28,
                "fourth_number"     => 4,
                "fifth_number"      => 11,
                "sixth_number"      => 77,
                "seventh_number"    => 70,
                "key"               => md5(10)
            ]
        ]);
    }
}
