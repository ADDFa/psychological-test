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
        Schema::create("exam_times", function (Blueprint $table) {
            $table->id();
            $table->enum("exam", ["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me", "msdt", "papi"]);
            $table->integer("time")->unsigned();
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
        Schema::dropIfExists("exam_times");
    }
};
