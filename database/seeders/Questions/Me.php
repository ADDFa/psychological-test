<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Me extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("me_words")->insert([
            [
                "word"      => "Bunga"
            ],
            [
                "word"      => "Perkakas"
            ],
            [
                "word"      => "Burung"
            ],
            [
                "word"      => "Kesenian"
            ],
            [
                "word"      => "Binatang"
            ]
        ]);

        DB::table("me_sub_words")->insert([
            [
                "me_word_id"    => 1,
                "word"          => "Soka"
            ],
            [
                "me_word_id"    => 1,
                "word"          => "Larat"
            ],
            [
                "me_word_id"    => 1,
                "word"          => "Flamboyan"
            ],
            [
                "me_word_id"    => 1,
                "word"          => "Yasmin"
            ],
            [
                "me_word_id"    => 1,
                "word"          => "Dahlia"
            ],
            [
                "me_word_id"    => 2,
                "word"          => "Wajan"
            ],
            [
                "me_word_id"    => 2,
                "word"          => "Jarum"
            ],
            [
                "me_word_id"    => 2,
                "word"          => "Kikir"
            ],
            [
                "me_word_id"    => 2,
                "word"          => "Cangkul"
            ],
            [
                "me_word_id"    => 2,
                "word"          => "Palu"
            ],
            [
                "me_word_id"    => 3,
                "word"          => "Itik"
            ],
            [
                "me_word_id"    => 3,
                "word"          => "Elang"
            ],
            [
                "me_word_id"    => 3,
                "word"          => "Walet"
            ],
            [
                "me_word_id"    => 3,
                "word"          => "Tekukur"
            ],
            [
                "me_word_id"    => 3,
                "word"          => "Nuri"
            ],
            [
                "me_word_id"    => 4,
                "word"          => "Quintet"
            ],
            [
                "me_word_id"    => 4,
                "word"          => "Arca"
            ],
            [
                "me_word_id"    => 4,
                "word"          => "Opera"
            ],
            [
                "me_word_id"    => 4,
                "word"          => "Gamelan"
            ],
            [
                "me_word_id"    => 4,
                "word"          => "Ukiran"
            ],
            [
                "me_word_id"    => 5,
                "word"          => "Musang"
            ],
            [
                "me_word_id"    => 5,
                "word"          => "Rusa"
            ],
            [
                "me_word_id"    => 5,
                "word"          => "Beruang"
            ],
            [
                "me_word_id"    => 5,
                "word"          => "Zebra"
            ],
            [
                "me_word_id"    => 5,
                "word"          => "Harimau"
            ]
        ]);

        DB::table("me_questions")->insert([
            [
                "question"      => "Kata yang mempunyai huruf permulaan - A - adalah suatu ...",
                "key"           => md5("d")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - B - adalah suatu ...",
                "key"           => md5("e")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - C - adalah suatu ...",
                "key"           => md5("b")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - D - adalah suatu ...",
                "key"           => md5("a")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - E - adalah suatu ...",
                "key"           => md5("c")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - F - adalah suatu ...",
                "key"           => md5("a")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - G - adalah suatu ...",
                "key"           => md5("d")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - H - adalah suatu ...",
                "key"           => md5("e")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - I - adalah suatu ...",
                "key"           => md5("c")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - J - adalah suatu ...",
                "key"           => md5("b")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - K - adalah suatu ...",
                "key"           => md5("b")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - L - adalah suatu ...",
                "key"           => md5("a")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - M - adalah suatu ...",
                "key"           => md5("e")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - N - adalah suatu ...",
                "key"           => md5("c")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - O - adalah suatu ...",
                "key"           => md5("d")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - P - adalah suatu ...",
                "key"           => md5("b")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - R - adalah suatu ...",
                "key"           => md5("e")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - S - adalah suatu ...",
                "key"           => md5("a")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - T - adalah suatu ...",
                "key"           => md5("c")
            ],
            [
                "question"      => "Kata yang mempunyai huruf permulaan - U - adalah suatu ...",
                "key"           => md5("d")
            ]
        ]);
    }
}
