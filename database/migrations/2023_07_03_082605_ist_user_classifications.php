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
        Schema::create("ist_user_classifications", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->enum("comprehension", [1, 2, 3, 4, 5]);
            $table->enum("problem_analysis", [1, 2, 3, 4, 5]);
            $table->enum("flexibility_of_thinking", [1, 2, 3, 4, 5]);
            $table->enum("verbal_logic", [1, 2, 3, 4, 5]);
            $table->enum("memory_and_concentration", [1, 2, 3, 4, 5]);
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
        Schema::dropIfExists("ist_user_classifications");
    }
};
