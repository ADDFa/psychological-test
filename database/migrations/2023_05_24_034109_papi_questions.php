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
        Schema::create("papi_questions", function (Blueprint $table) {
            $table->id();
            $table->text("first_question");
            $table->enum("first_arrow", ["left", "right", "top-right", "bottom-left"]);
            $table->text("second_question");
            $table->enum("second_arrow", ["left", "right", "top-right", "bottom-left"]);
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
        Schema::dropIfExists("papi_questions");
    }
};
