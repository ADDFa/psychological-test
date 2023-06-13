<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ra extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ra_questions")->insert([
            [
                "question"  => "Jika seorang anak memiliki 50 rupiah dan memberikan 15 rupiah kepada orang lain, berapa rupiahkah yang masih tinggal padanya?",
                "key"           => md5(35)
            ],

            [
                "question"  => "Berapa km-kah yang dapat ditempuh oleh kereta api dalam waktu 7 jam, jika kecepatannya 40km/jam",
                "key"           => md5(280)
            ],

            [
                "question"  => "15 peti buah-buahan beratnya 250kg dan setiap peti kosong beratnya 3kg, berapakah berat buah-buahan itu",
                "key"           => md5(205)
            ],

            [
                "question"  => "Seorang mempunyai persediaan rumput yang cukup untuk 7 ekor kuda selama 78 hari. Berapa harikah persediaan itu cukup untuk 21 ekor kuda?",
                "key"           => md5(26)
            ],

            [
                "question"  => "3 batang cokelat harganya Rp. 5,- Berapa batangkah yang dapat kita beli dengan Rp. 50,-?",
                "key"           => md5(30)
            ],

            [
                "question"  => "Seseorang dapat berjalan 1,75m dalam waktu ¼detik. Berapa meterkah yang dapat ia tempuh dalam waktu 10 detik?",
                "key"           => md5(70)
            ],

            [
                "question"  => "Jika sebuah batu terletak 15m disebelah selatan dari sebatang pohon dan pohon itu berada 30m di sebelah selatan dari sebuah rumah, berapa meterkah jarak antara batu dan rumah itu?",
                "key"           => md5(45)
            ],

            [
                "question"  => "Jika 4½m bahan sandang harganya Rp. 90,- berapa rupiahkah harganya 2½m?",
                "key"           => md5(50)
            ],

            [
                "question"  => "7 orang dapat menyelesaikan sesuatu pekerjaan dalam 6 hari. Berapa orangkah yang diperlukan untuk menyelesaikan pekerjaan itu setengah hari?",
                "key"           => md5(84)
            ],

            [
                "question"  => "Karena dipanaskan, kawat yang panjangnya 48cm akan mengembang menjadi 52cm. Setelah pemanasan berapakah panjangnya kawat yang berukuran 72cm?",
                "key"           => md5(78)
            ],

            [
                "question"  => "Suatu pabrik dapat menghasilkan 304 batang pensil dalam waktu 8 jam. Berapa batangkah dihasilkan dalam waktu setengah jam?",
                "key"           => md5(19)
            ],

            [
                "question"  => "Untuk suatu campuran diperlukan 2 bagian perak dan 3 bagian timah. Berapa gramkah perak yang diperlukan untuk mendapatkan campuran itu yang beratnya 15gram?",
                "key"           => md5(6)
            ],

            [
                "question"  => "Untuk setiap Rp. 3,- yang dimiliki Sidin, Hamid memiliki Rp. 5,- Jika mereka bersama mempunyai Rp. 120,- berapa rupiah kan yang dimiliki hamid?",
                "key"           => md5(75)
            ],

            [
                "question"  => "Mesin A menenun 60m kain, sedangkan mesin B menenun 40m. Berapa meterkah yang ditenun mesin A, jika mesin B menenun 60m?",
                "key"           => md5(90)
            ],

            [
                "question"  => "Seseorang membelikan 1/10 dari uangnya untuk perangko dan 4 kali jumlah itu untuk alat tulis. Sisa uangnya masih Rp. 60,- Berapa rupiahkah uangnya semula?",
                "key"           => md5(120)
            ],

            [
                "question"  => "Didalam dua peti terdapat 43 buah piring. Didalam peti yang satu terdapat 9 buah piring lebih banyak didalam peti yang lain. Berapa buah piring yang terdapat didalam peti yang lebih kecil?",
                "key"           => md5(17)
            ],

            [
                "question"  => "Suatu lembaran kain yang panjangnya 60cm harus dibagi sedemikian rupa sehingga panjangnya satu bagian ialah 2/3 dari bagian yang lain. Berapa panjangnya bagian yang terpendek?",
                "key"           => md5(24)
            ],

            [
                "question"  => "Suatu perusahaan mengekspor 3/4 dari hasil peroduksinya dab menjual 4/5 dari sisa itu di dalam Negeri. Berapa % kah hasil produksi yang masih tinggal?",
                "key"           => md5(5)
            ],

            [
                "question"  => "Jika suatu botol berisi anggur hanya 7/8 bagian dan hargannya ialah Rp. 84,- berapakah harga anggur itu jika botol anggur itu hanya terisi 1/2 penuh?",
                "key"           => md5(48)
            ],

            [
                "question"  => "Didalam suatu keluarga setiap anak perempuan memiliki jumlah saudara laki-laki yang sama dengan jumlah saudara perempuan dan setiap anak laki-laki mempunyai dua kali lebih banyak saudara perempuan dari pada saudara laki-laki. Berapa anak laki-lakikah yang terdapat didalam keluarga itu?,",
                "key"           => md5(3)
            ]
        ]);
    }
}
