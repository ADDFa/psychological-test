<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class An extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("questions_an")->insert([
            // 1
            [
                "first_word"        => "Menemukan",
                "second_word"       => "Menghilangkan",
                "third_word"        => "Mengingat",
                "option_a"          => "Menghapal",
                "option_b"          => "Mengenai",
                "option_c"          => "Melupakan",
                "option_d"          => "Berpikir",
                "option_e"          => "Memimpikan",
                "key"               => md5("c")
            ],

            // 2
            [
                "first_word"        => "Bunga",
                "second_word"       => "Jambangan",
                "third_word"        => "Burung",
                "option_a"          => "Sarang",
                "option_b"          => "Langit",
                "option_c"          => "Pagar",
                "option_d"          => "Pohon",
                "option_e"          => "Sangkar",
                "key"               => md5("e")
            ],

            // 3
            [
                "first_word"        => "Kereta Api",
                "second_word"       => "Rel",
                "third_word"        => "Otobis",
                "option_a"          => "Roda",
                "option_b"          => "Poros",
                "option_c"          => "Ban",
                "option_d"          => "Jalan Raya",
                "option_e"          => "Kecepatan",
                "key"               => md5("d")
            ],

            // 4
            [
                "first_word"        => "Perak",
                "second_word"       => "Emas",
                "third_word"        => "Cincin",
                "option_a"          => "Arloji",
                "option_b"          => "Berlian",
                "option_c"          => "Permata",
                "option_d"          => "Gelang",
                "option_e"          => "Platina",
                "key"               => md5("d")
            ],

            // 5
            [
                "first_word"        => "Lingakaran",
                "second_word"       => "Bola",
                "third_word"        => "Bujur Sangkar",
                "option_a"          => "Bentuk",
                "option_b"          => "Gambar",
                "option_c"          => "Segi Empat",
                "option_d"          => "Kubus",
                "option_e"          => "Piramida",
                "key"               => md5("d")
            ],

            // 6
            [
                "first_word"        => "Saran",
                "second_word"       => "Keputusan",
                "third_word"        => "Merundingkan",
                "option_a"          => "Menawarkan",
                "option_b"          => "Menentukan",
                "option_c"          => "Menilai",
                "option_d"          => "Menimbang",
                "option_e"          => "Merenungkan",
                "key"               => md5("a")
            ],

            // 7
            [
                "first_word"        => "Lidah",
                "second_word"       => "Asam",
                "third_word"        => "Hidung",
                "option_a"          => "Mencium",
                "option_b"          => "Bernapas",
                "option_c"          => "Mengecap",
                "option_d"          => "Tengik",
                "option_e"          => "Asin",
                "key"               => md5("d")
            ],

            // 8
            [
                "first_word"        => "Darah",
                "second_word"       => "Pembuluh",
                "third_word"        => "Air",
                "option_a"          => "Pintu Air",
                "option_b"          => "Sungai",
                "option_c"          => "Talang",
                "option_d"          => "Hujan",
                "option_e"          => "Ember",
                "key"               => md5("b")
            ],

            // 9
            [
                "first_word"        => "Saraf",
                "second_word"       => "Penyalur",
                "third_word"        => "Pupil",
                "option_a"          => "Penyinaran",
                "option_b"          => "Mata",
                "option_c"          => "Melihat",
                "option_d"          => "Cahaya",
                "option_e"          => "Pelindung",
                "key"               => md5("e")
            ],

            // 10
            [
                "first_word"        => "Pengantar Surat",
                "second_word"       => "Pengantar Telegram",
                "third_word"        => "Pandai Besi",
                "option_a"          => "Palu Godam",
                "option_b"          => "Pedagan Besi",
                "option_c"          => "Api",
                "option_d"          => "Tukang Emas",
                "option_e"          => "Besi Tempa",
                "key"               => md5("d")
            ],

            // 11
            [
                "first_word"        => "Buta",
                "second_word"       => "Warna",
                "third_word"        => "Tuli",
                "option_a"          => "Pendengaran",
                "option_b"          => "Mendengar",
                "option_c"          => "Nada",
                "option_d"          => "Kata",
                "option_e"          => "Telinga",
                "key"               => md5("c")
            ],

            // 12
            [
                "first_word"        => "Makanan",
                "second_word"       => "Bumbu",
                "third_word"        => "Ceramah",
                "option_a"          => "Penghinaan",
                "option_b"          => "Pidato",
                "option_c"          => "Kelakar",
                "option_d"          => "Kesan",
                "option_e"          => "Ayat",
                "key"               => md5("c")
            ],

            // 13
            [
                "first_word"        => "Marah",
                "second_word"       => "Emosi",
                "third_word"        => "Duka Cita",
                "option_a"          => "Suka Cita",
                "option_b"          => "Sakit Hati",
                "option_c"          => "Suasana Hati",
                "option_d"          => "Sedih",
                "option_e"          => "rindu",
                "key"               => md5("c")
            ],

            // 14
            [
                "first_word"        => "Mantel",
                "second_word"       => "Jubah",
                "third_word"        => "Wool",
                "option_a"          => "Bahan Sandang",
                "option_b"          => "Domba",
                "option_c"          => "Sutra",
                "option_d"          => "Jas",
                "option_e"          => "Tekstil",
                "key"               => md5("c")
            ],

            // 15
            [
                "first_word"        => "Ketinggian Puncak",
                "second_word"       => "Tekanan Udara",
                "third_word"        => "Ketinggian Nada",
                "option_a"          => "Garpu Tala",
                "option_b"          => "Sopran",
                "option_c"          => "Nyanyian",
                "option_d"          => "Panjang Senar",
                "option_e"          => "Suara",
                "key"               => md5("d")
            ],

            // 16
            [
                "first_word"        => "Negara",
                "second_word"       => "Revolusi",
                "third_word"        => "Hidup",
                "option_a"          => "Biologi",
                "option_b"          => "Keturunan",
                "option_c"          => "Mutasi",
                "option_d"          => "Seleksi",
                "option_e"          => "Ilmu Hewan",
                "key"               => md5("c")
            ],

            // 17
            [
                "first_word"        => "Kekurangan",
                "second_word"       => "Penemuan",
                "third_word"        => "Panas",
                "option_a"          => "Haus",
                "option_b"          => "Khatulistiwa",
                "option_c"          => "Es",
                "option_d"          => "Matahari",
                "option_e"          => "Dingin",
                "key"               => md5("c")
            ],

            // 18
            [
                "first_word"        => "Kayu",
                "second_word"       => "Diketam",
                "third_word"        => "Besi",
                "option_a"          => "Dipalu",
                "option_b"          => "Digergaji",
                "option_c"          => "Dituang",
                "option_d"          => "Dikikir",
                "option_e"          => "Ditempa",
                "key"               => md5("d")
            ],

            // 19
            [
                "first_word"        => "Olahragawan",
                "second_word"       => "Lembing",
                "third_word"        => "Cendikiawan",
                "option_a"          => "Perpustakaan",
                "option_b"          => "Penelitian",
                "option_c"          => "Karya",
                "option_d"          => "Studi",
                "option_e"          => "Mikroskop",
                "key"               => md5("e")
            ],

            // 20
            [
                "first_word"        => "Keledai",
                "second_word"       => "Kuda Pacuan",
                "third_word"        => "Pembakaran",
                "option_a"          => "Pemadam Api",
                "option_b"          => "Obor",
                "option_c"          => "Letupan",
                "option_d"          => "Korek Api",
                "option_e"          => "Lautan Api",
                "key"               => md5("e")
            ]
        ]);
    }
}
