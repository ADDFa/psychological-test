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
        DB::table("fa_image_questions")->insert([
            [
                "question"  => "questions/question-image1.jpg"
            ],
            [
                "question"  => "questions/question-image2.jpg"
            ]
        ]);

        DB::table("fa_questions")->insert([
            // TODO: Soal 1
            [
                "question"              => "questions/question-fa1.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "questions/question-fa2.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "questions/question-fa3.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-fa4.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "questions/question-fa5.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-fa6.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-fa7.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "questions/question-fa8.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "questions/question-fa9.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "questions/question-fa10.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-fa11.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "questions/question-fa12.jpg",
                "fa_image_question_id"  => 1,
                "key"               => md5("b")
            ],

            // TODO: Soal 2
            [
                "question"              => "questions/question-fa13.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-fa14.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("c")
            ],
            [
                "question"              => "questions/question-fa15.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-fa16.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("a")
            ],
            [
                "question"              => "questions/question-fa17.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-fa18.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-fa19.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("c")
            ],
            [
                "question"              => "questions/question-fa20.jpg",
                "fa_image_question_id"  => 2,
                "key"               => md5("a")
            ]
        ]);
    }
}
