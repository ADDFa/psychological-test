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
        $ages = [];
        for ($i = 20; $i <= 45; $i++) {
            $ages[] = $i;
        }

        Schema::create("ist_normas", function (Blueprint $table) use ($ages) {
            $table->id();
            $table->enum("question_category", ["se", "wa", "an", "ge", "ra", "zr", "fa", "wu", "me"]);
            $table->foreign("question_category")->references("category")->on("question_categories");
            $table->integer("rw")->unsigned();
            $table->integer("sw")->unsigned();
            $table->set("ages", $ages)->nullable();
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
        Schema::dropIfExists("ist_normas");
    }
};
