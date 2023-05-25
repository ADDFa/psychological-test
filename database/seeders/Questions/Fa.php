<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Fa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("images")->insert([
            [
                "filename"  => "fa/question1.jpg"
            ],
            [
                "filename"  => "fa/question2.jpg"
            ],
            [
                "filename"  => "fa/question-image1.jpg"
            ],
            [
                "filename"  => "fa/question-image2.jpg"
            ],
            [
                "filename"  => "fa/question-image3.jpg"
            ],
            [
                "filename"  => "fa/question-image4.jpg"
            ],
            [
                "filename"  => "fa/question-image5.jpg"
            ],
            [
                "filename"  => "fa/question-image6.jpg"
            ],
            [
                "filename"  => "fa/question-image7.jpg"
            ],
            [
                "filename"  => "fa/question-image8.jpg"
            ],
            [
                "filename"  => "fa/question-image9.jpg"
            ],
            [
                "filename"  => "fa/question-image10.jpg"
            ],
            [
                "filename"  => "fa/question-image11.jpg"
            ],
            [
                "filename"  => "fa/question-image12.jpg"
            ],
            [
                "filename"  => "fa/question-image13.jpg"
            ],
            [
                "filename"  => "fa/question-image14.jpg"
            ],
            [
                "filename"  => "fa/question-image15.jpg"
            ],
            [
                "filename"  => "fa/question-image16.jpg"
            ],
            [
                "filename"  => "fa/question-image17.jpg"
            ],
            [
                "filename"  => "fa/question-image18.jpg"
            ],
            [
                "filename"  => "fa/question-image19.jpg"
            ],
            [
                "filename"  => "fa/question-image20.jpg"
            ]
        ]);

        DB::table("questions_fa")->insert([
            ["question" => 1],
            ["question" => 2]
        ]);

        DB::table("questions_fa_image")->insert([
            [
                "question_fa_id"    => 1,
                "image_id"          => 3,
                "key"               => md5("a")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 4,
                "key"               => md5("c")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 5,
                "key"               => md5("b")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 6,
                "key"               => md5("a")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 7,
                "key"               => md5("d")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 8,
                "key"               => md5("b")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 9,
                "key"               => md5("c")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 10,
                "key"               => md5("e")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 11,
                "key"               => md5("e")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 12,
                "key"               => md5("d")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 13,
                "key"               => md5("e")
            ],
            [
                "question_fa_id"    => 1,
                "image_id"          => 14,
                "key"               => md5("b")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 15,
                "key"               => md5("d")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 16,
                "key"               => md5("c")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 17,
                "key"               => md5("b")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 18,
                "key"               => md5("a")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 19,
                "key"               => md5("b")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 20,
                "key"               => md5("d")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 21,
                "key"               => md5("c")
            ],
            [
                "question_fa_id"    => 2,
                "image_id"          => 22,
                "key"               => md5("a")
            ]
        ]);
    }
}
