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
        DB::table("questions_ge")->insert([
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

        DB::table("answer_key_ge")->insert([
            [
                "question_ge_id"   => 1,
                "key"           => "bunga",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 1,
                "key"           => "kembang",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 1,
                "key"           => "perdu",
                "value"         => 2
            ],

            // 1 - value 1
            [
                "question_ge_id"   => 1,
                "key"           => "tumbuh-tumbuhan",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 1,
                "key"           => "tangkal",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 1,
                "key"           => "harum",
                "value"         => 1
            ],

            // 2 - value 2
            [
                "question_ge_id"   => 2,
                "key"           => "alat indera",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 2,
                "key"           => "indera",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 2,
                "key"           => "penca indra",
                "value"         => 2
            ],

            // 2 - value 1
            [
                "question_ge_id"   => 2,
                "key"           => "organ",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 2,
                "key"           => "alat tubuh",
                "value"         => 1
            ],

            // 3 - value 2
            [
                "question_ge_id"   => 3,
                "key"           => "hablur",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 3,
                "key"           => "kristal",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 3,
                "key"           => "zat arang",
                "value"         => 2
            ],

            // 3 - value 1
            [
                "question_ge_id"   => 3,
                "key"           => "berkilauan",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 3,
                "key"           => "mengkilap",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 3,
                "key"           => "bening",
                "value"         => 1
            ],

            // 4 - value 2
            [
                "question_ge_id"   => 4,
                "key"           => "cuaca",
                "value"         => 2
            ],

            // 4 - value 1
            [
                "question_ge_id"   => 4,
                "key"           => "air",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 4,
                "key"           => "basah",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 4,
                "key"           => "gejala alam",
                "value"         => 1
            ],

            // 5 - value 2
            [
                "question_ge_id"   => 5,
                "key"           => "pembawa berita",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 5,
                "key"           => "alat perhubungan",
                "value"         => 2
            ],

            // 5 - value 1
            [
                "question_ge_id"   => 5,
                "key"           => "ptt",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 5,
                "key"           => "pos",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 5,
                "key"           => "telekomunikasi",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 5,
                "key"           => "perhubungan",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 5,
                "key"           => "komunikasi",
                "value"         => 1
            ],

            // 6 - value 2
            [
                "question_ge_id"   => 6,
                "key"           => "optic",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 6,
                "key"           => "alat optic",
                "value"         => 2
            ],

            // 6 - value 1
            [
                "question_ge_id"   => 6,
                "key"           => "lensa",
                "value"         => 1
            ],

            // 7 - value 2
            [
                "question_ge_id"   => 7,
                "key"           => "alat pencernaan",
                "value"         => 2
            ],

            // 7 - value 1
            [
                "question_ge_id"   => 7,
                "key"           => "jalan makanan",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 7,
                "key"           => "perut",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 7,
                "key"           => "isi perut",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 7,
                "key"           => "pencernaan makanan",
                "value"         => 1
            ],

            // 8 - value 2
            [
                "question_ge_id"   => 8,
                "key"           => "penyebut jumlah",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 8,
                "key"           => "pengertian jumlah",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 8,
                "key"           => "jumlah",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 8,
                "key"           => "kuantitas",
                "value"         => 2
            ],

            // 8 - value 1
            [
                "question_ge_id"   => 8,
                "key"           => "mengukur",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 8,
                "key"           => "ukuran",
                "value"         => 1
            ],

            // 9 - value 2
            [
                "question_ge_id"   => 9,
                "key"           => "bibit",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 9,
                "key"           => "bakal",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 9,
                "key"           => "alat pembiak",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 9,
                "key"           => "permulaan",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 9,
                "key"           => "penghidupan",
                "value"         => 2
            ],

            // 9 - value 1
            [
                "question_ge_id"   => 9,
                "key"           => "sel",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 9,
                "key"           => "pembiakan",
                "value"         => 1
            ],

            // 10 - value 2
            [
                "question_ge_id"   => 10,
                "key"           => "symbol",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 10,
                "key"           => "lambang",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 10,
                "key"           => "tanda",
                "value"         => 2
            ],

            // 10 - value 1
            [
                "question_ge_id"   => 10,
                "key"           => "nama",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 10,
                "key"           => "tanda pengenal",
                "value"         => 1
            ],

            // 11 - value 2
            [
                "question_ge_id"   => 11,
                "key"           => "makhluk",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 11,
                "key"           => "makhluk hidup",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 11,
                "key"           => "organisme",
                "value"         => 2
            ],

            // 11 - value 1
            [
                "question_ge_id"   => 11,
                "key"           => "tumbuh",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 11,
                "key"           => "biologi",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 11,
                "key"           => "ilmu hayat",
                "value"         => 1
            ],

            // 12 - value 2
            [
                "question_ge_id"   => 12,
                "key"           => "wadah",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 12,
                "key"           => "tempat pengisi",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 12,
                "key"           => "tempat penyimpan",
                "value"         => 2
            ],

            // 12 - value 1
            [
                "question_ge_id"   => 12,
                "key"           => "alat",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 12,
                "key"           => "tempat sesuatu",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 12,
                "key"           => "tempat",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 12,
                "key"           => "benda",
                "value"         => 1
            ],

            // 13 - value 2
            [
                "question_ge_id"   => 13,
                "key"           => "pengertian waktu",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 13,
                "key"           => "batas",
                "value"         => 2
            ],

            // 13 - value 1
            [
                "question_ge_id"   => 13,
                "key"           => "waktu",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 13,
                "key"           => "masa",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 13,
                "key"           => "saat",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 13,
                "key"           => "lamanya",
                "value"         => 1
            ],

            // 14 - value 2
            [
                "question_ge_id"   => 14,
                "key"           => "sifat-watak",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 14,
                "key"           => "sifat-karakter",
                "value"         => 2
            ],

            // 14 - value 1
            [
                "question_ge_id"   => 14,
                "key"           => "sifat",
                "value"         => 1
            ],

            // 15 - value 2
            [
                "question_ge_id"   => 15,
                "key"           => "regulator harga",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 15,
                "key"           => "pengertian ekonomi",
                "value"         => 2
            ],

            // 15 - value 1
            [
                "question_ge_id"   => 15,
                "key"           => "dagang",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 15,
                "key"           => "niaga",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 15,
                "key"           => "penjualan",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 15,
                "key"           => "pembelian",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 15,
                "key"           => "jual beli",
                "value"         => 1
            ],

            // 16 - value 2
            [
                "question_ge_id"   => 16,
                "key"           => "penyebut ruang",
                "value"         => 2
            ],

            [
                "question_ge_id"   => 16,
                "key"           => "pengertian ruang",
                "value"         => 2
            ],

            // 16 - value 1
            [
                "question_ge_id"   => 16,
                "key"           => "arah",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 16,
                "key"           => "letak",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 16,
                "key"           => "penentuan daerah",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 16,
                "key"           => "tempat",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 16,
                "key"           => "ruang",
                "value"         => 1
            ],

            [
                "question_ge_id"   => 16,
                "key"           => "penunjuk tempat",
                "value"         => 1
            ]
        ]);
    }
}
