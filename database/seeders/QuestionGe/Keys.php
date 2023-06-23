<?php

namespace Database\Seeders\QuestionGe;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Keys extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ge_answer_keys")->insert([
            [
                "ge_question_id"   => 1,
                "key"           => "bunga",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 1,
                "key"           => "kembang",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 1,
                "key"           => "perdu",
                "point"         => "2"
            ],

            // 1 - value 1
            [
                "ge_question_id"   => 1,
                "key"           => "tumbuh-tumbuhan",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 1,
                "key"           => "tumbuhan",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 1,
                "key"           => "tangkal",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 1,
                "key"           => "harum",
                "point"         => "1"
            ],

            // 2 - value 2
            [
                "ge_question_id"   => 2,
                "key"           => "alat indera",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 2,
                "key"           => "indera",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 2,
                "key"           => "penca indra",
                "point"         => "2"
            ],

            // 2 - value 1
            [
                "ge_question_id"   => 2,
                "key"           => "organ",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 2,
                "key"           => "alat tubuh",
                "point"         => "1"
            ],

            // 3 - value 2
            [
                "ge_question_id"   => 3,
                "key"           => "hablur",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 3,
                "key"           => "kristal",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 3,
                "key"           => "zat arang",
                "point"         => "2"
            ],

            // 3 - value 1
            [
                "ge_question_id"   => 3,
                "key"           => "berkilauan",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 3,
                "key"           => "mengkilap",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 3,
                "key"           => "bening",
                "point"         => "1"
            ],

            // 4 - value 2
            [
                "ge_question_id"   => 4,
                "key"           => "cuaca",
                "point"         => "2"
            ],

            // 4 - value 1
            [
                "ge_question_id"   => 4,
                "key"           => "air",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 4,
                "key"           => "basah",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 4,
                "key"           => "gejala alam",
                "point"         => "1"
            ],

            // 5 - value 2
            [
                "ge_question_id"   => 5,
                "key"           => "pembawa berita",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 5,
                "key"           => "alat perhubungan",
                "point"         => "2"
            ],

            // 5 - value 1
            [
                "ge_question_id"   => 5,
                "key"           => "ptt",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 5,
                "key"           => "pos",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 5,
                "key"           => "telekomunikasi",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 5,
                "key"           => "perhubungan",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 5,
                "key"           => "komunikasi",
                "point"         => "1"
            ],

            // 6 - value 2
            [
                "ge_question_id"   => 6,
                "key"           => "optic",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 6,
                "key"           => "alat optic",
                "point"         => "2"
            ],

            // 6 - value 1
            [
                "ge_question_id"   => 6,
                "key"           => "lensa",
                "point"         => "1"
            ],

            // 7 - value 2
            [
                "ge_question_id"   => 7,
                "key"           => "alat pencernaan",
                "point"         => "2"
            ],

            // 7 - value 1
            [
                "ge_question_id"   => 7,
                "key"           => "jalan makanan",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 7,
                "key"           => "perut",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 7,
                "key"           => "isi perut",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 7,
                "key"           => "pencernaan makanan",
                "point"         => "1"
            ],

            // 8 - value 2
            [
                "ge_question_id"   => 8,
                "key"           => "penyebut jumlah",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 8,
                "key"           => "pengertian jumlah",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 8,
                "key"           => "jumlah",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 8,
                "key"           => "kuantitas",
                "point"         => "2"
            ],

            // 8 - value 1
            [
                "ge_question_id"   => 8,
                "key"           => "mengukur",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 8,
                "key"           => "ukuran",
                "point"         => "1"
            ],

            // 9 - value 2
            [
                "ge_question_id"   => 9,
                "key"           => "bibit",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 9,
                "key"           => "bakal",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 9,
                "key"           => "alat pembiak",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 9,
                "key"           => "permulaan",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 9,
                "key"           => "penghidupan",
                "point"         => "2"
            ],

            // 9 - value 1
            [
                "ge_question_id"   => 9,
                "key"           => "sel",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 9,
                "key"           => "pembiakan",
                "point"         => "1"
            ],

            // 10 - value 2
            [
                "ge_question_id"   => 10,
                "key"           => "symbol",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 10,
                "key"           => "lambang",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 10,
                "key"           => "tanda",
                "point"         => "2"
            ],

            // 10 - value 1
            [
                "ge_question_id"   => 10,
                "key"           => "nama",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 10,
                "key"           => "tanda pengenal",
                "point"         => "1"
            ],

            // 11 - value 2
            [
                "ge_question_id"   => 11,
                "key"           => "makhluk",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 11,
                "key"           => "makhluk hidup",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 11,
                "key"           => "organisme",
                "point"         => "2"
            ],

            // 11 - value 1
            [
                "ge_question_id"   => 11,
                "key"           => "tumbuh",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 11,
                "key"           => "biologi",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 11,
                "key"           => "ilmu hayat",
                "point"         => "1"
            ],

            // 12 - value 2
            [
                "ge_question_id"   => 12,
                "key"           => "wadah",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 12,
                "key"           => "tempat pengisi",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 12,
                "key"           => "tempat penyimpan",
                "point"         => "2"
            ],

            // 12 - value 1
            [
                "ge_question_id"   => 12,
                "key"           => "alat",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 12,
                "key"           => "tempat sesuatu",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 12,
                "key"           => "tempat",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 12,
                "key"           => "benda",
                "point"         => "1"
            ],

            // 13 - value 2
            [
                "ge_question_id"   => 13,
                "key"           => "pengertian waktu",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 13,
                "key"           => "batas",
                "point"         => "2"
            ],

            // 13 - value 1
            [
                "ge_question_id"   => 13,
                "key"           => "waktu",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 13,
                "key"           => "masa",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 13,
                "key"           => "saat",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 13,
                "key"           => "lamanya",
                "point"         => "1"
            ],

            // 14 - value 2
            [
                "ge_question_id"   => 14,
                "key"           => "sifat-watak",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 14,
                "key"           => "sifat-karakter",
                "point"         => "2"
            ],

            // 14 - value 1
            [
                "ge_question_id"   => 14,
                "key"           => "sifat",
                "point"         => "1"
            ],

            // 15 - value 2
            [
                "ge_question_id"   => 15,
                "key"           => "regulator harga",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 15,
                "key"           => "pengertian ekonomi",
                "point"         => "2"
            ],

            // 15 - value 1
            [
                "ge_question_id"   => 15,
                "key"           => "dagang",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 15,
                "key"           => "niaga",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 15,
                "key"           => "penjualan",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 15,
                "key"           => "pembelian",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 15,
                "key"           => "jual beli",
                "point"         => "1"
            ],

            // 16 - value 2
            [
                "ge_question_id"   => 16,
                "key"           => "penyebut ruang",
                "point"         => "2"
            ],

            [
                "ge_question_id"   => 16,
                "key"           => "pengertian ruang",
                "point"         => "2"
            ],

            // 16 - value 1
            [
                "ge_question_id"   => 16,
                "key"           => "arah",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 16,
                "key"           => "letak",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 16,
                "key"           => "penentuan daerah",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 16,
                "key"           => "tempat",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 16,
                "key"           => "ruang",
                "point"         => "1"
            ],

            [
                "ge_question_id"   => 16,
                "key"           => "penunjuk tempat",
                "point"         => "1"
            ]
        ]);
    }
}
