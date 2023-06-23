<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ge extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ge_questions")->insert([
            [
                "first_word"    => "Mawar",
                "second_word"   => "Melati"
            ],

            [
                "first_word"    => "Mata",
                "second_word"   => "Telinga"
            ],

            [
                "first_word"    => "Gula",
                "second_word"   => "Intan"
            ],

            [
                "first_word"    => "Hujan",
                "second_word"   => "Salju"
            ],

            [
                "first_word"    => "Pengantar Surat",
                "second_word"   => "Telepon"
            ],

            [
                "first_word"    => "Kamera",
                "second_word"   => "Kacamata"
            ],

            [
                "first_word"    => "Lambung",
                "second_word"   => "Usus"
            ],

            [
                "first_word"    => "Banyak",
                "second_word"   => "Sedikit"
            ],

            [
                "first_word"    => "Telur",
                "second_word"   => "Benih"
            ],

            [
                "first_word"    => "Bendera",
                "second_word"   => "Lencana"
            ],

            [
                "first_word"    => "Rumput",
                "second_word"   => "Gajah"
            ],

            [
                "first_word"    => "Ember",
                "second_word"   => "Kantong"
            ],

            [
                "first_word"    => "Awal",
                "second_word"   => "Akhir"
            ],

            [
                "first_word"    => "Kikir",
                "second_word"   => "Boros"
            ],

            [
                "first_word"    => "Penawaran",
                "second_word"   => "Permintaan"
            ],

            [
                "first_word"    => "Atas",
                "second_word"   => "Bawah"
            ]
        ]);
    }
}
