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
        Schema::create("ra_answers", function (Blueprint $table) {
            $table->id();
            $table->foreignId("ra_question_id")->constrained("ra_questions");
            $table->foreignId("user_id")->constrained("users");
            $table->integer("answer")->nullable();
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
        Schema::dropIfExists("ra_answers");
    }
};
