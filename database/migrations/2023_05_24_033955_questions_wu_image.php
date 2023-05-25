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
        Schema::create("questions_wu_image", function (Blueprint $table) {
            $table->foreignId("question_wu_id")->constrained("questions_wu");
            $table->foreignId("image_id")->constrained("images");
            $table->char("key");
            $table->primary(["question_wu_id", "image_id"]);
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
        Schema::dropIfExists("questions_wu_image");
    }
};
