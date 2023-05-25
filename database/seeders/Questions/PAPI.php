<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PAPI extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("questions_papi")->insert([
            // 1
            [
                "first_question"    => "SAYA ADALAH PEKERJA KERAS",
                "first_arrow"       => "left",
                "second_question"   => "SAYA TIDAK MUDAH MURUNG",
                "second_arrow"      => "top-right"
            ],

            // 2
            [
                "first_question"    => "SAYA INGIN BEKERJA LEBIH BAIK DARIPADA ORANG-ORANG LAIN",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN MELAKSANAKAN APA YANG SAYA KERJAKAN SAMPAI SELESAI",
                "second_arrow"      => "bottom-left"
            ],

            // 3
            [
                "first_question"    => "SAYA SUKA MENUNJUKKAN KEPADA PADA ORANG LAIN BAGAIMANA CARA MENGERJAKAN SESUATU",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN BERUSAHA SEBAIK MUNGKIN",
                "second_arrow"      => "bottom-left"
            ],

            // 4
            [
                "first_question"    => "SAYA SUKA MELAKUKAN HAL-HAL YANG LUCU",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MENGATAKAN PADA ORANG LAIN APA YANG HARUS SAYA KERJAKAN",
                "second_arrow"      => "bottom-left"
            ],

            // 5
            [
                "first_question"    => "SAYA SUKA BERGABUNG DALAM KELOMPOK",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN DIPERHATIKAN DALAM KELOMPOK",
                "second_arrow"      => "bottom-left"
            ],

            // 6
            [
                "first_question"    => "SAYA SUKA MEMBUAT PERSAHABATAN YANG AKRAB",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA BERTEMAN DALAM SUATU KELOMPOK",
                "second_arrow"      => "bottom-left"
            ],

            // 7
            [
                "first_question"    => "SAYA CEPAT MERUBAH PIKIRAN SAYA JIKA PERLU",
                "first_arrow"       => "right",
                "second_question"   => "SAYA BERUSAHA MEMBUAT PERSAHABATAN YANG BARU DAN BERBEDA",
                "second_arrow"      => "bottom-left"
            ],

            // 8
            [
                "first_question"    => "SAYA SUKA MEMBALAS JIKA BENAR-BENAR DISAKITI",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MENGERJAKAN SESUATU HAL YANG BARU DAN BERBEDA",
                "second_arrow"      => "bottom-left"
            ],

            // 9
            [
                "first_question"    => "SAYA INGIN DISUKAI ATASAN SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MEMBERITAHU ORANG LAIN JIKA MEREKA BERBUAT SALAH",
                "second_arrow"      => "bottom-left"
            ],

            // 10
            [
                "first_question"    => "SAYA SENANG MENGIKUTI PETUNJUK-PETUNJUK YANG DIBERIKAN KEPADA SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN MENYENANGKAN ATASAN-ATASAN SAYA",
                "second_arrow"      => "bottom-left"
            ],

            // 11
            [
                "first_question"    => "SAYA BERUSAHA KERAS",
                "first_arrow"       => "left",
                "second_question"   => "SAYA ADALAH SEORANG YANG RAPI, SAYA MENEMPATKAN SEGALA SESUATU DITEMPATNYA",
                "second_arrow"      => "top-right"
            ],

            // 12
            [
                "first_question"    => "SAYA MAMPU MEMPENGARUHI ORANG LAIN UNTUK MELAKUKAN APA YANG SAYA KEHENDAKI",
                "first_arrow"       => "left",
                "second_question"   => "SAYA TIDAK MUDAH MARAH",
                "second_arrow"      => "top-right"
            ],

            // 13
            [
                "first_question"    => "SAYA SUKA MEMBERITAHUKAN APA YANG HARUS DIKERJAKAN OLEH KELOMPOK",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SELALU MENGERJAKAN TUGAS SAMPAI SELESAI",
                "second_arrow"      => "bottom-left"
            ],

            // 14
            [
                "first_question"    => "SAYA INGIN KELIHATAN GEMBIRA DAN MENARIK",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN BETUL-BETUL BERHASIL",
                "second_arrow"      => "bottom-left"
            ],

            // 15
            [
                "first_question"    => "SAYA SUKA MENYESUAIKAN DIRI DALAM KELOMPOK",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MEMBANTU ORANG DALAM MEMUTUSKAN SESUATU",
                "second_arrow"      => "bottom-left"
            ],

            // 16
            [
                "first_question"    => "SAYA CEMAS BILA ADA YANG TIDAK MENYUKAI SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG BILA DIPERHATIKAN ORANG",
                "second_arrow"      => "bottom-left"
            ],

            // 17
            [
                "first_question"    => "SAYA SENANG MENCOBA HAL-HAL YANG BARU",
                "first_arrow"       => "right",
                "second_question"   => "SAYA LEBIH SUKA BEKERJA DENGAN ORANG LAIN DARIPADA SENDIRIAN",
                "second_arrow"      => "bottom-left"
            ],

            // 18
            [
                "first_question"    => "SAYA KADANG-KADANG MENYALAHKAN ORANG LAIN BILA ADA SESUATU YANG TIDAK BERES",
                "first_arrow"       => "right",
                "second_question"   => "SAYA MERASA TERGANGGU BILA ADA ORANG YANG TIDAK MENYUKAI SAYA",
                "second_arrow"      => "bottom-left"
            ],

            // 19
            [
                "first_question"    => "SAYA INGIN MENYENANGKAN ATASAN-ATASAN SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MENCOBA SUATU PEKERJAAN YANG BARU DAN BERBEDA",
                "second_arrow"      => "bottom-left"
            ],

            // 20
            [
                "first_question"    => "SAYA SUKA PENJELASAN-PENJELASAN TERPERINCI DALAM BEKERJA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA BERTERUS TERANG BILA ADA ORANG YANG MENJENGKELKAN SAYA",
                "second_arrow"      => "bottom-left"
            ],

            // 21
            [
                "first_question"    => "SAYA SELALU BERUSAHA KERAS",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SUKA MENGERJAKAN SETIAP LANGKAH PEKERJAAN DENGAN HATI-HATI",
                "second_arrow"      => "top-right"
            ],

            // 22
            [
                "first_question"    => "SAYA MEMIMPIN DENGAN BAIK",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MENGATUR PEKERJAAN DENGAN BAIK",
                "second_arrow"      => "top-right"
            ],

            // 23
            [
                "first_question"    => "SAYA LAMBAN DALAM MEMBUAT KEPUTUSAN-KEPUTUSAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MUDAH MARAH",
                "second_arrow"      => "top-right"
            ],

            // 24
            [
                "first_question"    => "DALAM KELOMPOK, SAYA LEBIH SUKA DIAM",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG MENGERJAKAN BEBERAPA TUGAS PADA SAAT YANG SAMA",
                "second_arrow"      => "bottom-left"
            ],

            // 25
            [
                "first_question"    => "SAYA SENANG DIUNDANG",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN MENGERJAKAN SEGALA SESUATUNYA LEBIH BAIK DARI ORANG LAIN",
                "second_arrow"      => "bottom-left"
            ],

            // 26
            [
                "first_question"    => "SAYA SUKA MEMBUAT PERSAHABATAN YANG AKRAB",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MEMBERI NASEHAT KEPADA ORANG LAIN",
                "second_arrow"      => "bottom-left"
            ],

            // 27
            [
                "first_question"    => "SAYA SUKA MENGERJAKAN SESUATU HAL YANG BARI DAN BERBEDA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG MENCERITAKAN KEBERHASILAN SAYA",
                "second_arrow"      => "bottom-left"
            ],

            // 28
            [
                "first_question"    => "JIKA MEMANG SAYA BENAR, SAYA AKAN MEMPERTAHANKANNYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MENJADI ANGGOTA KELOMPOK",
                "second_arrow"      => "bottom-left"
            ],

            // 29
            [
                "first_question"    => "SAYA MENGHINDARI SUATU PERBEDAAN PENDAPAT",
                "first_arrow"       => "right",
                "second_question"   => "SAUA BERUSAHA UNTUK LEBIH AKRAB DENGAN ORANG-ORANG",
                "second_arrow"      => "bottom-left"
            ],

            // 30
            [
                "first_question"    => "SAYA SUKA DIBERITAHUKAN BAGAIMANA MELAKSANAKAN TUGAS",
                "first_arrow"       => "right",
                "second_question"   => "SAYA MUDAH MERASA BOSAN",
                "second_arrow"      => "bottom-left"
            ],

            // 31
            [
                "first_question"    => "SAYA BEKERJA KERAS",
                "first_arrow"       => "right",
                "second_question"   => "SAYA BANYAK BERPIKIR DAN MERENCANA",
                "second_arrow"      => "bottom-left"
            ],

            // 32
            [
                "first_question"    => "SAYA MEMIMPIN SUATU KELOMPOK",
                "first_arrow"       => "left",
                "second_question"   => "HAL-HAL YANG DETAIL MENARIK MINAT SAYA",
                "second_arrow"      => "top-right"
            ],

            // 33
            [
                "first_question"    => "SAYA MEMBUAT KEPUTUSAN DENGAN MUDAH DAN CEPAT",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MERAWAT BARANG-BARANG SAYA DENGAN RAPI DAN TERATUR",
                "second_arrow"      => "top-right"
            ],

            // 34
            [
                "first_question"    => "SAYA MENGERJAKAN SESUATU DENGAN CEPAT",
                "first_arrow"       => "left",
                "second_question"   => "SAYA JARANG MARAH ATAU SEDIH",
                "second_arrow"      => "top-right"
            ],

            // 35
            [
                "first_question"    => "SAYA INGIN MENJADI BAGIAN DARI SUATU KELOMPOK",
                "first_arrow"       => "right",
                "second_question"   => "SAYA HANYA INGIN MENGERJAKAN SUATU PEKERJAAN DALAM SATU SAAT",
                "second_arrow"      => "bottom-left"
            ],

            // 36
            [
                "first_question"    => "SAYA BERUSAHA MEMBUAT TEMAN AKRAB",
                "first_arrow"       => "right",
                "second_question"   => "SAYA BERUSAHA KERAS UNTUK MENJADI YANG PALING BAIK",
                "second_arrow"      => "bottom-left"
            ],

            // 37
            [
                "first_question"    => "SAYA SUKA BAJU-BAJU DAN MOBIL-MOBIL MODEL MUTAKHIR",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG BERTANGGUNG JAWAB ATAS ORANG LAIN",
                "second_arrow"      => "bottom-left"
            ],

            // 38
            [
                "first_question"    => "SAYA SENANG BERDEBAT",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG MENDAPAT PERHATIAN",
                "second_arrow"      => "bottom-left"
            ],

            // 39
            [
                "first_question"    => "SAYA SUKA MENYENANGKAN ATASAN-ATASAN SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA TERTARIK UNTUK MENJADI BAGIAN DARI SUATU KELOMPOK",
                "second_arrow"      => "bottom-left"
            ],

            // 40
            [
                "first_question"    => "SAYA SUKA MEMATUHI PERATURAN DENGAN SUNGGUH-SUNGGUH",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN AGAR ORANG-ORANG BENAR-BENAR MENGENAL SAYA",
                "second_arrow"      => "bottom-left"
            ],

            // 41
            [
                "first_question"    => "SAYA BERUSAHA KERAS",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SANGAT RAMAH",
                "second_arrow"      => "top-right"
            ],

            // 42
            [
                "first_question"    => "ORANG-ORANG MENGANGAP SAYA ADALAH PEMIMPIN YANG BAIK",
                "first_arrow"       => "left",
                "second_question"   => "SAYA BERPIKIR PANJANG DAN HATI-HATI",
                "second_arrow"      => "top-right"
            ],

            // 43
            [
                "first_question"    => "SAYA SENGAN MENGAMBIL KESEMPATAN-KESEMPATAN YANG ADA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SENANG MENGURUSI HAL-HAL YANG KECIL",
                "second_arrow"      => "top-right"
            ],

            // 44
            [
                "first_question"    => "ORANG-ORANG MENGANGGAP SAYA BEKERJA DENGAN CEPAT",
                "first_arrow"       => "left",
                "second_question"   => "ORANG-ORANG MENGANGAP SAYA MERAWAT SESUATU DENGAN RAPI DAN TERATUR",
                "second_arrow"      => "top-right"
            ],

            // 45
            [
                "first_question"    => "SAYA SUKA BEROLAHRAGA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SANGAT MENYENANGKAN",
                "second_arrow"      => "top-right"
            ],

            // 46
            [
                "first_question"    => "SAYA SENANG JIKA ORANG-ORANG AKRAB DAN RAMAH",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SELALU BERUSAHA MENYELESAIKAN APA YANG SAYA KERJAKAN",
                "second_arrow"      => "bottom-left"
            ],

            // 47
            [
                "first_question"    => "SAYA SUKA BEREKSPERIMEN DAN MENCOBA HAL-HAL YANG BARU",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG MENYELESAIKAN DENGAN BAIK PEKERJAAN YANG SULIT",
                "second_arrow"      => "bottom-left"
            ],

            // 48
            [
                "first_question"    => "SAYA SENANG DIPERLAKUKAN DENGAN ADIL",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MEMBERITAHU ORANG BAGAIMANA MENGERJAKAN SESUATU",
                "second_arrow"      => "bottom-left"
            ],

            // 49
            [
                "first_question"    => "SAYA SUKA MELAKUKAN APA YANG DIHARAPKAN DARI SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG MENDAPAT PERHATIAN",
                "second_arrow"      => "bottom-left"
            ],

            // 50
            [
                "first_question"    => "SAYA SUKA PENJELASAN-PENJELASAN YANG TERPERINCI DALAM BEKERJA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG BERADA DIANTARA ORANG-ORANG",
                "second_arrow"      => "bottom-left"
            ],

            // 51
            [
                "first_question"    => "SAYA SELALU BERUSAHA MENYELESAIKAN TUGAS-TUGAS SECARA SEMPURNA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA ADALAH ORANG YANG TAK MENGENAL LELAH",
                "second_arrow"      => "top-right"
            ],

            // 52
            [
                "first_question"    => "SAYA ADALAH TIPE PEMIMPIN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MUDAH BERTEMAN",
                "second_arrow"      => "top-right"
            ],

            // 53
            [
                "first_question"    => "SAYA SUKA MENGAMBIL KESEMPATAN-KESEMPATAN YANG ADA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA BANYAK BERFIKIR",
                "second_arrow"      => "top-right"
            ],

            // 54
            [
                "first_question"    => "SAYA BEKERJA DENGAN CEPAT DAN MANTAP",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SENANG BEKERJA SAMPAI PADA HAL SEKECIL-KECILNYA",
                "second_arrow"      => "top-right"
            ],

            // 55
            [
                "first_question"    => "SAYA MEMPUNYAI BANYAK TENAGA UNTUK BEROLAHRAGA DAN BERMAIN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MERAWAT BARANG-BARANG SAYA DENGAN RAPI DAN TERATUR",
                "second_arrow"      => "top-right"
            ],

            // 56
            [
                "first_question"    => "SAYA BERHUBUNGAN BAIK DENGAN SEMUA ORANG",
                "first_arrow"       => "left",
                "second_question"   => "SAYA BERTABIAT MANTAP DAN TENANG",
                "second_arrow"      => "top-right"
            ],

            // 57
            [
                "first_question"    => "SAYA SUKA BERTEMU DENGAN ORANG-ORANG BARU DAN MENGERJAKAN SESUATU YANG BARU",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SELALU INGIN MENYELESAIKAN PEKERJAAN YANG SAYA MULAI",
                "second_arrow"      => "bottom-left"
            ],

            // 58
            [
                "first_question"    => "SAYA BIASANYA MEMPERTAHANKAN APA YANG SAYA YAKINI",
                "first_arrow"       => "right",
                "second_question"   => "SAYA BIASANYA SUKA BEKERJA KERAS",
                "second_arrow"      => "bottom-left"
            ],

            // 59
            [
                "first_question"    => "SAYA SENANG SARAN-SARAN DARI ORANG YANG SAYA HORMATI",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG BERTANGGUNG JAWAB ATAS ORANG LAIN",
                "second_arrow"      => "bottom-left"
            ],

            // 60
            [
                "first_question"    => "SAYA MEMBIARKAN ORANG LAIN MEMPENGARUHI SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG MENDAPATKAN BANYAK PERHATIAN",
                "second_arrow"      => "bottom-left"
            ],

            // 61
            [
                "first_question"    => "SAYA BIASANYA BEKERJA KERAS",
                "first_arrow"       => "left",
                "second_question"   => "SAYA BIASANYA BEKERJA CEPAT",
                "second_arrow"      => "top-right"
            ],

            // 62
            [
                "first_question"    => "BILA SAYA BERBICARA ORANG-ORANG MENDENGANRKAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SANGAT MAHIR DALAM MEMUTUSKAN SESUATU",
                "second_arrow"      => "top-right"
            ],

            // 63
            [
                "first_question"    => "SAYA LAMBAN DALAM MEMUTUSKAN SESUATU",
                "first_arrow"       => "left",
                "second_question"   => "SAYA LAMBAN DALAM MEMBUAT PERSAHABATAN",
                "second_arrow"      => "top-right"
            ],

            // 64
            [
                "first_question"    => "SAYA BIASANYA MAKAN DENGAN CEPAT",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SENANG MEMBACA",
                "second_arrow"      => "top-right"
            ],

            // 65
            [
                "first_question"    => "SAYA MENYUKAI PEKERJAAN DIMANA SAYA DAPAT BERKELILING",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SENANG PADA PEKERJAAN YANG MEMBUTUHKAN KETELITIAN",
                "second_arrow"      => "top-right"
            ],

            // 66
            [
                "first_question"    => "SAYA MENCARI TEMAN SEBANYAK MUNGKIN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA TAHU HAL-HAL APA YANG TIDAK PERLU",
                "second_arrow"      => "top-right"
            ],

            // 67
            [
                "first_question"    => "SAYA MERENCANAKAN SESUATU JAUH-JAUH SEBELUMNYA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SELALU MENYENANGKAN",
                "second_arrow"      => "top-right"
            ],

            // 68
            [
                "first_question"    => "SAYA BANGGA AKAN KETENARAN SAYA",
                "first_arrow"       => "right",
                "second_question"   => "SAYA MEMUSATKAN PERHATIAN PADA SATU PERSOALAN SAMPAI HAL TERSEBUT TERPECAHKAN",
                "second_arrow"      => "bottom-left"
            ],

            // 69
            [
                "first_question"    => "SAYA SUKA MENYENANGKAN ORANG-ORANG YANG SAYA HORMATI",
                "first_arrow"       => "right",
                "second_question"   => "SAYA INGIN BERHASIL",
                "second_arrow"      => "bottom-left"
            ],

            // 70
            [
                "first_question"    => "SAYA SENANG ORANG LAIN YANG MEMBUAT KEPUTUSAN UNTUK KELOMPOK",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SUKA MEMBUAT KEPUTUSAN-KEPUTUSAN UNTUK KELOMPOK",
                "second_arrow"      => "bottom-left"
            ],

            // 71
            [
                "first_question"    => "SAYA SELALU BERUSAHA KERAS",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MEMUTUSKAN SESUATU DENGAN MUDAH DAN CEPAT",
                "second_arrow"      => "top-right"
            ],

            // 72
            [
                "first_question"    => "KELOMPOK BIASANYA MENGERJAKAN APA YANG SAYA INGINKAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA TERLALU TERGESA-GESA",
                "second_arrow"      => "top-right"
            ],

            // 73
            [
                "first_question"    => "SAYA SERING MERASA LELAH",
                "first_arrow"       => "left",
                "second_question"   => "SAYA LAMBAN DALAM MEMUTUSKAN SESUATU",
                "second_arrow"      => "top-right"
            ],

            // 74
            [
                "first_question"    => "SAYA MUDAH BERTEMAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA BEKERJA DENGAN CEPAT",
                "second_arrow"      => "top-right"
            ],

            // 75
            [
                "first_question"    => "SAYA BIASANYA SEMANGAT DAN BERGAIRAH",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MEMERLUKAN BANYAK WAKTU UNTUK BERPIKIR",
                "second_arrow"      => "top-right"
            ],

            // 76
            [
                "first_question"    => "SAYA SANGAT RAMAH KEPADA ORANG",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SENANG PADA PEKERJAAN YANG MEMBUTUHKAN KETEPATAN",
                "second_arrow"      => "top-right"
            ],

            // 77
            [
                "first_question"    => "SAYA BANYAK SEKALI BERPIKIR DAN MERENCANA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MELETAKKAN SEGALANYA PADA TEMPATNYA",
                "second_arrow"      => "top-right"
            ],

            // 78
            [
                "first_question"    => "SAYA SENANG PADA PEKERJAAN YANG MEMBUTUHKAN KETELITIAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA TIDAK MUDAH MARAH",
                "second_arrow"      => "top-right"
            ],

            // 79
            [
                "first_question"    => "SAYA SUKA MENURUT PADA ORANG-ORANG YANG SAYA KAGUMI",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SELALU MENYELESAIKAN PEKERJAAN YANG SAYA MULAI",
                "second_arrow"      => "bottom-left"
            ],

            // 80
            [
                "first_question"    => "SAYA SENANG MENGIKUTI PETUNJUK-PETUNJUK YANG JELAS",
                "first_arrow"       => "right",
                "second_question"   => "SAYA SENANG BEKERJA KERAS",
                "second_arrow"      => "bottom-left"
            ],

            // 81
            [
                "first_question"    => "SAYA BERUSAHA MENDAPATKAN APA YANG SAYA INGINKAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SEORANG PEMIMPIN YANG BAIK",
                "second_arrow"      => "top-right"
            ],

            // 82
            [
                "first_question"    => "SAYA MENYURUH ORANG UNTUK BEKERJA KERAS",
                "first_arrow"       => "left",
                "second_question"   => "SAYA ADALAH ORANG YANG KURANG BERPIKIR PANJANG",
                "second_arrow"      => "top-right"
            ],

            // 83
            [
                "first_question"    => "SAYA MEMUTUSKAN SESUATU DENGAN CEPAT",
                "first_arrow"       => "left",
                "second_question"   => "SAYA BERBICARA DENGAN CEPAT",
                "second_arrow"      => "top-right"
            ],

            // 84
            [
                "first_question"    => "SAYA BIASA BEKERJA TERGESA-GESA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA BERLATIH/BEROLAHRAGA DENGAN TERATUR",
                "second_arrow"      => "top-right"
            ],

            // 85
            [
                "first_question"    => "SAYA CEPAT MERASA LELAH",
                "first_arrow"       => "left",
                "second_question"   => "SAYA TIDAK SUKA MENJUMPAI ORANG",
                "second_arrow"      => "top-right"
            ],

            // 86
            [
                "first_question"    => "SAYA BANYAK MEMBUAT PERSAHABATAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA MEMERLUKAN BANYAK WAKTU UNTUK BERPIKIR",
                "second_arrow"      => "top-right"
            ],

            // 87
            [
                "first_question"    => "SAYA SUKA MENERAPKAN TEORI-TEORI DALAM BEKERJA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SUKA MENGERJAKAN SESUATU SAMPAI PADA HAL YANG SEKECIL-KECILNYA",
                "second_arrow"      => "top-right"
            ],

            // 88
            [
                "first_question"    => "SAYA SUKA MENGERJAKAN SESUATU SAMPAI PADA HAL YANG SEKECIL-KECILNYA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SUKA MENGATUR PEKERJAAN SAYA",
                "second_arrow"      => "top-right"
            ],

            // 89
            [
                "first_question"    => "SAYA MELETAKKAN SEGALANYA PADA TEMPATNYA",
                "first_arrow"       => "left",
                "second_question"   => "SAYA SELALU MENYENANGKAN",
                "second_arrow"      => "top-right"
            ],

            // 90
            [
                "first_question"    => "SAYA SENANG DIBERI PETUNJUK APA YANG HARUS DIKERJAKAN",
                "first_arrow"       => "left",
                "second_question"   => "SAYA HARUS MENYELESAIKAN APA YANG SAYA MULAI",
                "second_arrow"      => "top-right"
            ]
        ]);
    }
}
