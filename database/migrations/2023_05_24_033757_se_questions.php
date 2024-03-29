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
        Schema::create("se_questions", function (Blueprint $table) {
            $table->id();
            $table->text("question");
            $table->string("option_a");
            $table->string("option_b");
            $table->string("option_c");
            $table->string("option_d");
            $table->string("option_e");
            $table->string("key");
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
        Schema::dropIfExists("se_questions");
    }
};
