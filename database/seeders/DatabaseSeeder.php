<?php

namespace Database\Seeders;

use Database\Seeders\QuestionGe\Conversions;
use Database\Seeders\QuestionGe\Keys;
use Illuminate\Database\Seeder;
use Database\Seeders\Questions\An;
use Database\Seeders\Questions\Fa;
use Database\Seeders\Questions\Ge;
use Database\Seeders\Questions\Me;
use Database\Seeders\Questions\Ra;
use Database\Seeders\Questions\Se;
use Database\Seeders\Questions\Wa;
use Database\Seeders\Questions\Wu;
use Database\Seeders\Questions\Zr;
use Database\Seeders\Questions\MSDT;
use Database\Seeders\Questions\PAPI;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // TODO: Questions
            Se::class,
            Wa::class,
            An::class,
            Ge::class,
            Ra::class,
            Zr::class,
            Fa::class,
            Wu::class,
            Me::class,
            PAPI::class,
            MSDT::class,
            Exams::class,
            QuestionCategories::class,

            // TODO: Users
            Users::class,

            // TODO: Question Ge
            Keys::class,
            Conversions::class
        ]);
    }
}
