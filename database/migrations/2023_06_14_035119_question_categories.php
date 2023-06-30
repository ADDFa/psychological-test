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
        Schema::create("question_categories", function (Blueprint $table) {
            $table->enum("category", ["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me", "msdt", "papi"])->primary();
            $table->integer("time")->unsigned(); // seconds
            $table->integer("total_question")->unsigned();
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
        Schema::dropIfExists("question_categories");
    }
};
