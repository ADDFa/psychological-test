<?php

namespace Database\Seeders;

use Database\Seeders\Questions\Wa;
use Database\Seeders\Questions\An;
use Database\Seeders\Questions\Fa;
use Database\Seeders\Questions\Ge;
use Database\Seeders\Questions\Me;
use Database\Seeders\Questions\MSDT;
use Database\Seeders\Questions\PAPI;
use Database\Seeders\Questions\Ra;
use Database\Seeders\Questions\Se;
use Database\Seeders\Questions\Wu;
use Database\Seeders\Questions\Zr;

use Illuminate\Database\Seeder;

class Run extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            An::class,
            Fa::class,
            Ge::class,
            Me::class,
            MSDT::class,
            PAPI::class,
            Ra::class,
            Se::class,
            Wa::class,
            Wu::class,
            Zr::class,
            Exams::class,
            ExamTimes::class
        ]);
    }
}
