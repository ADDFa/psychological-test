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
        Schema::create("user_test_deadline", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_test_id")->constrained("user_test");
            $table->enum("question_category", ["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me", "msdt", "papi"]);
            $table->foreign("question_category")->references("category")->on("question_categories");
            $table->bigInteger("deadline")->unsigned();
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
        Schema::dropIfExists("user_test_deadline");
    }
};
