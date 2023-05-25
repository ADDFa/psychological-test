<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Wu extends Seeder
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
                "filename"  => "wu/question.jpg"
            ],
            [
                "filename"  => "wu/question-image1.jpg"
            ],
            [
                "filename"  => "wu/question-image2.jpg"
            ],
            [
                "filename"  => "wu/question-image3.jpg"
            ],
            [
                "filename"  => "wu/question-image4.jpg"
            ],
            [
                "filename"  => "wu/question-image5.jpg"
            ],
            [
                "filename"  => "wu/question-image6.jpg"
            ],
            [
                "filename"  => "wu/question-image7.jpg"
            ],
            [
                "filename"  => "wu/question-image8.jpg"
            ],
            [
                "filename"  => "wu/question-image9.jpg"
            ],
            [
                "filename"  => "wu/question-image10.jpg"
            ],
            [
                "filename"  => "wu/question-image11.jpg"
            ],
            [
                "filename"  => "wu/question-image12.jpg"
            ],
            [
                "filename"  => "wu/question-image13.jpg"
            ],
            [
                "filename"  => "wu/question-image14.jpg"
            ],
            [
                "filename"  => "wu/question-image15.jpg"
            ],
            [
                "filename"  => "wu/question-image16.jpg"
            ],
            [
                "filename"  => "wu/question-image17.jpg"
            ],
            [
                "filename"  => "wu/question-image18.jpg"
            ],
            [
                "filename"  => "wu/question-image19.jpg"
            ],
            [
                "filename"  => "wu/question-image20.jpg"
            ]
        ]);

        DB::table("questions_wu")->insert([
            [
                "question"      => 23
            ]
        ]);

        DB::table("questions_wu_image")->insert([
            [
                "question_wu_id"    => 1,
                "image_id"          => 24,
                "key"               => md5("a")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 25,
                "key"               => md5("c")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 26,
                "key"               => md5("d")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 27,
                "key"               => md5("e")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 28,
                "key"               => md5("a")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 29,
                "key"               => md5("c")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 30,
                "key"               => md5("d")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 31,
                "key"               => md5("c")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 32,
                "key"               => md5("e")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 33,
                "key"               => md5("a")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 34,
                "key"               => md5("b")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 35,
                "key"               => md5("d")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 36,
                "key"               => md5("e")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 37,
                "key"               => md5("b")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 38,
                "key"               => md5("d")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 39,
                "key"               => md5("b")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 40,
                "key"               => md5("a")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 41,
                "key"               => md5("e")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 42,
                "key"               => md5("b")
            ],
            [
                "question_wu_id"    => 1,
                "image_id"          => 43,
                "key"               => md5("c")
            ]
        ]);
    }
}
