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
        Schema::create("questions_zr", function (Blueprint $table) {
            $table->id();
            $table->integer("first_number", false, true);
            $table->integer("second_number", false, true);
            $table->integer("thrid_number", false, true);
            $table->integer("fourth_number", false, true);
            $table->integer("fifth_number", false, true);
            $table->integer("sixth_number", false, true);
            $table->integer("seventh_number", false, true);
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
        Schema::dropIfExists("questions_zr");
    }
};
