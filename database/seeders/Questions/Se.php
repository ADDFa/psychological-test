<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Se extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("se_questions")->insert([
            // 1
            [
                "question"      => "Pengaruh seseorang terhadap orang lain seharusnya bergantung pada ...",
                "option_a"      => "Kekuasaan",
                "option_b"      => "Bujukan",
                "option_c"      => "Kekayaan",
                "option_d"      => "Keberanian",
                "option_e"      => "Kewibawaan",
                "key"           => md5("e")
            ],

            // 2
            [
                "question"      => 'Lawan "hemat" ialah ...',
                "option_a"      => "Murah",
                "option_b"      => "Kikir",
                "option_c"      => "Boros",
                "option_d"      => "Bernilai",
                "option_e"      => "Kaya",
                "key"           => md5("c")
            ],

            // 3
            [
                "question"      => "... tidak termasuk cuaca",
                "option_a"      => "Angin Puyuh",
                "option_b"      => "Halilintar",
                "option_c"      => "Salju",
                "option_d"      => "Gempa Bumi",
                "option_e"      => "Kabut",
                "key"           => md5("d")
            ],

            // 4
            [
                "question"      => 'Lawannya "setia" ialah ...',
                "option_a"      => "Cinta",
                "option_b"      => "Benci",
                "option_c"      => "Persahabatan",
                "option_d"      => "Khianat",
                "option_e"      => "Permusuhan",
                "key"           => md5("d")
            ],

            // 5
            [
                "question"      => "Seekor kuda selalu mempunyai ...",
                "option_a"      => "Kandang",
                "option_b"      => "Ladam",
                "option_c"      => "Pelana",
                "option_d"      => "Kuku",
                "option_e"      => "Surai",
                "key"           => md5("d")
            ],

            // 6
            [
                "question"      => "Seorang paman ... lebih tua dari kemenekannya",
                "option_a"      => "Jarang",
                "option_b"      => "Biasanya",
                "option_c"      => "Selalu",
                "option_d"      => "Tidak Pernah",
                "option_e"      => "Kadang-kadang",
                "key"           => md5("b")
            ],

            // 7
            [
                "question"      => "Pada jumlah yang sama, nilai kalori yang tertinggi terdapat pada ...",
                "option_a"      => "Ikan",
                "option_b"      => "Daging",
                "option_c"      => "Lemak",
                "option_d"      => "Tahu",
                "option_e"      => "Sayuran",
                "key"           => md5("c")
            ],

            // 8
            [
                "question"      => "Pada suatu pertandingan selalu terdapat pada ...",
                "option_a"      => "Lawan",
                "option_b"      => "Wasit",
                "option_c"      => "Penonton",
                "option_d"      => "Sorak",
                "option_e"      => "Kemenangan",
                "key"           => md5("a")
            ],

            // 9
            [
                "question"      => "Suatu pernyataan yang belum dipastikan dikatakan sebagai pernyataan yang ...",
                "option_a"      => "Paradoks",
                "option_b"      => "Tergesa-gesa",
                "option_c"      => "Mempunyai Arti Tangkap",
                "option_d"      => "Menyesatkan",
                "option_e"      => "Hipotesis",
                "key"           => md5("e")
            ],

            // 10
            [
                "question"      => "Pada sepatu selalu terdapat ...",
                "option_a"      => "Kulit",
                "option_b"      => "Sol",
                "option_c"      => "Tali Sepatu",
                "option_d"      => "Gesper",
                "option_e"      => "Lidah",
                "key"           => md5("b")
            ],

            // 11
            [
                "question"      => "Suatu ... tidak menyangkut perquestionan pencegahan kecelakaan",
                "option_a"      => "Lampu Lalu Lintas",
                "option_b"      => "Kacamata Pelindung",
                "option_c"      => "Kotak PPPK",
                "option_d"      => "Tanda Peringatan",
                "option_e"      => "Palang Kereta Api",
                "key"           => md5("c")
            ],

            // 12
            [
                "question"      => "Lembar kertas uang Rp. 50.000,- mempunyai panjang ... cm",
                "option_a"      => "20",
                "option_b"      => "29",
                "option_c"      => "17",
                "option_d"      => "15",
                "option_e"      => "24",
                "key"           => md5("d")
            ],

            // 13
            [
                "question"      => "Seseorang yang bersikap menyangsikan setiap kemajuan ialah seorang yang ...",
                "option_a"      => "Demokratis",
                "option_b"      => "Radikal",
                "option_c"      => "Liberal",
                "option_d"      => "Konservatif",
                "option_e"      => "Anarkis",
                "key"           => md5("d")
            ],

            // 14
            [
                "question"      => 'Lawannya "tidak pernah" ialah ...',
                "option_a"      => "Sering",
                "option_b"      => "Kadang-kadang",
                "option_c"      => "Jarang",
                "option_d"      => "Kerap kali",
                "option_e"      => "Selalu",
                "key"           => md5("e")
            ],

            // 15
            [
                "question"      => "Jarak antara Jakarta - Surabaya kira-kira ... km",
                "option_a"      => "650",
                "option_b"      => "1000",
                "option_c"      => "800",
                "option_d"      => "600",
                "option_e"      => "950",
                "key"           => md5("c")
            ],

            // 16
            [
                "question"      => "Untuk membuat nada yang rendah dan mendalam, kita perlu memerlukan banyak ...",
                "option_a"      => "Kekuatan",
                "option_b"      => "Peranan",
                "option_c"      => "Ayunan",
                "option_d"      => "Berat",
                "option_e"      => "Suara",
                "key"           => md5("a")
            ],

            // 17
            [
                "question"      => "Ayah ... lebih berpengalaman dari pada anaknya",
                "option_a"      => "Selalu",
                "option_b"      => "Biasanya",
                "option_c"      => "Jauh",
                "option_d"      => "Jarang",
                "option_e"      => "Pada Dasarnya",
                "key"           => md5("b")
            ],

            // 18
            [
                "question"      => "Diantara kota-kota berikut ini, maka kota ... letaknya paling selatan",
                "option_a"      => "Jakarta",
                "option_b"      => "Bandung",
                "option_c"      => "Cirebon",
                "option_d"      => "Semarang",
                "option_e"      => "Surabaya",
                "key"           => md5("b")
            ],

            // 19
            [
                "question"      => "Jika kita mengetahui jumlah persentase nomor-nomor lotere yang tidak menang, maka kita dapat menghitung ...",
                "option_a"      => "Jumlah Nomor Yang Menang",
                "option_b"      => "Pajak Lotere",
                "option_c"      => "Kemungkinan Menang",
                "option_d"      => "Jumlah Pengikut",
                "option_e"      => "Tinggi Keuntungan",
                "key"           => md5("c")
            ],

            // 20
            [
                "question"      => "Seorang anak yang berumur 10 tahun tingginya rata-rata ... cm.",
                "option_a"      => "150",
                "option_b"      => "130",
                "option_c"      => "110",
                "option_d"      => "105",
                "option_e"      => "115",
                "key"           => md5("b")
            ]
        ]);
    }
}
