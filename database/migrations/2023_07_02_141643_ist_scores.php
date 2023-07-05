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
        Schema::create("ist_scores", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->enum("question_category", ["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me"]);
            $table->foreign("question_category")->references("category")->on("question_categories");
            $table->integer("rw_score")->unsigned();
            $table->integer("sw_score")->unsigned();
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
        Schema::dropIfExists("ist_scores");
    }
};
