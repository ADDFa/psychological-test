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
        Schema::create("questions_an", function (Blueprint $table) {
            $table->id();
            $table->string("first_word");
            $table->string("second_word");
            $table->string("third_word");
            $table->string("option_a");
            $table->string("option_b");
            $table->string("option_c");
            $table->string("option_d");
            $table->string("option_e");
            $table->char("key");
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
        Schema::dropIfExists("questions_an");
    }
};
