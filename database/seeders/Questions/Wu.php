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
                "question"  => "question-wu-image.jpg"
            ]
        ]);

        DB::table("wu_questions")->insert([
            [
                "question"              => "question-wu1.jpg",
                "wu_image_question_id"  => 1,
                "key"                   => md5("a")
            ],
            [
                "question"              => "question-wu2.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "question-wu3.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "question-wu4.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "question-wu5.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "question-wu6.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "question-wu7.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "question-wu8.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("c")
            ],
            [
                "question"              => "question-wu9.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "question-wu10.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "question-wu11.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "question-wu12.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "question-wu13.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "question-wu14.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "question-wu15.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("d")
            ],
            [
                "question"              => "question-wu16.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "question-wu17.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("a")
            ],
            [
                "question"              => "question-wu18.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("e")
            ],
            [
                "question"              => "question-wu19.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("b")
            ],
            [
                "question"              => "question-wu20.jpg",
                "wu_image_question_id"  => 1,
                "key"               => md5("c")
            ]
        ]);
    }
}
