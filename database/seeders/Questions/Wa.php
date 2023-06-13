<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Wa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("wa_questions")->insert([
            // 1
            [
                "option_a"      => "Lingakaran",
                "option_b"      => "Panah",
                "option_c"      => "Elips",
                "option_d"      => "Busur",
                "option_e"      => "Lengkungan",
                "key"           => md5("b"),
            ],

            // 2
            [
                "option_a"      => "Mengetuk",
                "option_b"      => "Memaki",
                "option_c"      => "Menjahit",
                "option_d"      => "Menggergaji",
                "option_e"      => "Memukul",
                "key"           => md5("b"),
            ],

            // 3
            [
                "option_a"      => "Lebar",
                "option_b"      => "Keliling",
                "option_c"      => "Luas",
                "option_d"      => "Isi",
                "option_e"      => "Panjang",
                "key"           => md5("d"),
            ],

            // 4
            [
                "option_a"      => "Mengikat",
                "option_b"      => "Menyatukan",
                "option_c"      => "Melepaskan",
                "option_d"      => "Mengaitkan",
                "option_e"      => "Meletakkan",
                "key"           => md5("c"),
            ],

            // 5
            [
                "option_a"      => "Arah",
                "option_b"      => "Timur",
                "option_c"      => "Perjalanan",
                "option_d"      => "Tujuan",
                "option_e"      => "Selatan",
                "key"           => md5("c"),
            ],

            // 6
            [
                "option_a"      => "Jarak",
                "option_b"      => "Perpisahan",
                "option_c"      => "Tugas",
                "option_d"      => "Batas",
                "option_e"      => "Perceraian",
                "key"           => md5("c"),
            ],

            // 7
            [
                "option_a"      => "Saringan",
                "option_b"      => "Kelambu",
                "option_c"      => "Payung",
                "option_d"      => "Tapisan",
                "option_e"      => "Jala",
                "key"           => md5("c"),
            ],

            // 8
            [
                "option_a"      => "Putih",
                "option_b"      => "Pucat",
                "option_c"      => "Buram",
                "option_d"      => "Kasar",
                "option_e"      => "Berkilauan",
                "key"           => md5("d"),
            ],

            // 9
            [
                "option_a"      => "Otobis",
                "option_b"      => "Pesawat Terbang",
                "option_c"      => "Sepeda Motor",
                "option_d"      => "Sepeda",
                "option_e"      => "Kapal Api",
                "key"           => md5("d"),
            ],

            // 10
            [
                "option_a"      => "Biola",
                "option_b"      => "Seruling",
                "option_c"      => "Klarinet",
                "option_d"      => "Terompet",
                "option_e"      => "Saxophon",
                "key"           => md5("a"),
            ],

            // 11
            [
                "option_a"      => "Bergelombang",
                "option_b"      => "Kasar",
                "option_c"      => "Berduri",
                "option_d"      => "Licin",
                "option_e"      => "Halus",
                "key"           => md5("e"),
            ],

            // 12
            [
                "option_a"      => "Jam",
                "option_b"      => "Kompas",
                "option_c"      => "Penunjuk Jalan",
                "option_d"      => "Bintang Pari",
                "option_e"      => "Arah",
                "key"           => md5("a"),
            ],

            // 13
            [
                "option_a"      => "Kebijaksanaan",
                "option_b"      => "Pendidikan",
                "option_c"      => "Perencanaan",
                "option_d"      => "Penempatan",
                "option_e"      => "Pengerahan",
                "key"           => md5("a"),
            ],

            // 14
            [
                "option_a"      => "Bermotor",
                "option_b"      => "Berjalan",
                "option_c"      => "Berlayar",
                "option_d"      => "Bersepeda",
                "option_e"      => "Berkuda",
                "key"           => md5("b"),
            ],

            // 15
            [
                "option_a"      => "Gambar",
                "option_b"      => "Lukisan",
                "option_c"      => "Potret",
                "option_d"      => "Patung",
                "option_e"      => "Ukiran",
                "key"           => md5("c"),
            ],

            // 16
            [
                "option_a"      => "Panjang",
                "option_b"      => "Lonjong",
                "option_c"      => "Runcing",
                "option_d"      => "Bulat",
                "option_e"      => "Bersudut",
                "key"           => md5("a"),
            ],

            // 17
            [
                "option_a"      => "Kunci",
                "option_b"      => "Palang Pintu",
                "option_c"      => "Gerendel",
                "option_d"      => "Gunting",
                "option_e"      => "Obeng",
                "key"           => md5("d"),
            ],

            // 18
            [
                "option_a"      => "Jembatan",
                "option_b"      => "Batas",
                "option_c"      => "Perkawinan",
                "option_d"      => "Pagar",
                "option_e"      => "Masyarakat",
                "key"           => md5("e"),
            ],

            // 19
            [
                "option_a"      => "Mengetam",
                "option_b"      => "Memahat",
                "option_c"      => "Mengasah",
                "option_d"      => "Melicinkan",
                "option_e"      => "Menggosok",
                "key"           => md5("b"),
            ],

            // 20
            [
                "option_a"      => "Batu",
                "option_b"      => "Baja",
                "option_c"      => "Bulu",
                "option_d"      => "Karet",
                "option_e"      => "Kayu",
                "key"           => md5("c"),
            ]
        ]);
    }
}
