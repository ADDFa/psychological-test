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
        Schema::create("zr_questions", function (Blueprint $table) {
            $table->id();
            $table->integer("first_number")->unsigned();
            $table->integer("second_number")->unsigned();
            $table->integer("thrid_number")->unsigned();
            $table->integer("fourth_number")->unsigned();
            $table->integer("fifth_number")->unsigned();
            $table->integer("sixth_number")->unsigned();
            $table->integer("seventh_number")->unsigned();
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
        Schema::dropIfExists("zr_questions");
    }
};
