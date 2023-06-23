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
        Schema::create("zr_answers", function (Blueprint $table) {
            $table->id();
            $table->foreignId("zr_question_id")->constrained("zr_questions");
            $table->foreignId("user_id")->constrained("users");
            $table->integer("answer");
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
        Schema::dropIfExists("zr_answers");
    }
};
