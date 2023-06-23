<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("ge_answers", function (Blueprint $table) {
            $table->id();
            $table->foreignId("ge_question_id")->constrained("ge_questions");
            $table->foreignId("user_id")->constrained("users");
            $table->string("answer");
            $table->enum("point", [0, 1, 2]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("ge_answers");
    }
};
