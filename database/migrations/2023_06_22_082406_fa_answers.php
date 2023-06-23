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
        Schema::create("fa_answers", function (Blueprint $table) {
            $table->id();
            $table->foreignId("fa_question_id")->constrained("fa_questions");
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
        Schema::dropIfExists("fa_answers");
    }
};
