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
        Schema::create("me_answers", function (Blueprint $table) {
            $table->id();
            $table->foreignId("me_question_id")->constrained("me_questions");
            $table->foreignId("user_id")->constrained("users");
            $table->enum("answer", ["a", "b", "c", "d", "e"]);
            $table->boolean("correct")->default(false);
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
        Schema::dropIfExists("me_answers");
    }
};
