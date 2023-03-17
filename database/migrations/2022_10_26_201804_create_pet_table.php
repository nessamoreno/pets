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
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->string('name_user');
            $table->integer('cell_phone');
            $table->string('pet_type');
            $table->string('pet_name');
            $table->integer('microchip')->unique();
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->string('race');
            $table->string('illness');
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
        Schema::dropIfExists('pet');
    }
};
