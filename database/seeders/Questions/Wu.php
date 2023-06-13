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
        DB::table("wu_image_questions")->insert([
            [
                "question"  => "questions/question-image-wu1.jpg"
            ]
        ]);

        DB::table("wu_questions")->insert([
            [
                "question"              => "questions/question-wu1.jpg",
                "question_wu_image_id"  => 1,
                "key"                   => md5("a")
            ],
            [
                "question"              => "questions/question-wu2.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "questions/question-wu3.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-wu4.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "questions/question-wu5.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "questions/question-wu6.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "questions/question-wu7.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-wu8.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "questions/question-wu9.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "questions/question-wu10.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "questions/question-wu11.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-wu12.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-wu13.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "questions/question-wu14.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-wu15.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "questions/question-wu16.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-wu17.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "questions/question-wu18.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "questions/question-wu19.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "questions/question-wu20.jpg",
                "question_wu_image_id"  => 1,
                "key"               => md5("c")
            ]
        ]);
    }
}
