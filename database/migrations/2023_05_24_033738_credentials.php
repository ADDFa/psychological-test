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
        Schema::create("credentials", function (Blueprint $table) {
            $table->foreignId("user_id")->constrained("users");
            $table->string("username")->unique();
            $table->string("password");
            $table->enum("role", ["admin", "user", "supervisor"]);
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
        Schema::dropIfExists("credentials");
    }
};
