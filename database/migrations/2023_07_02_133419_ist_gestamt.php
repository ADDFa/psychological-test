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
        Schema::create("ist_gestamt", function (Blueprint $table) {
            $table->id();
            $table->integer("rw")->unsigned();
            $table->integer("sw")->unsigned();
            $table->set("ages", [21, 22, 23, 24, 25, 26, 27, 28, 29, 30])->nullable();
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
        Schema::dropIfExists("ist_gestamt");
    }
};
