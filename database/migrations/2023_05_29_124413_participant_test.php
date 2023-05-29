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
        Schema::create("participant_test", function (Blueprint $table) {
            $table->id();
            $table->integer("no_test")->unsigned();
            $table->foreignId("user_id")->constrained("users");
            $table->bigInteger("end_exam_time")->unsigned();
            $table->enum("exam", ["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me", "msdt", "papi"]);
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
        Schema::dropIfExists("participant_test");
    }
};
