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
        Schema::create("answer_key_ge", function (Blueprint $table) {
            $table->id();
            $table->foreignId("question_ge_id")->constrained("questions_ge");
            $table->string("key");
            $table->enum("value", [1, 2]);
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
        Schema::dropIfExists("answer_key_ge");
    }
};
