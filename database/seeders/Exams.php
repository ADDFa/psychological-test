<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Exams extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("exams")->insert([
            ["exam" => "ist", "active" => true],
            ["exam" => "msdt", "active" => false],
            ["exam" => "papi", "active" => false]
        ]);
    }
}
