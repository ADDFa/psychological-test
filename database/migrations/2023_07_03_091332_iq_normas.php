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
        Schema::create("iq_normas", function (Blueprint $table) {
            $table->id();
            $table->integer("sw")->unsigned();
            $table->integer("iq")->unsigned();
            $table->integer("percentage")->unsigned();
            $table->string("category");
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
        Schema::dropIfExists("iq_normas");
    }
};
