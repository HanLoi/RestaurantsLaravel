<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_restaurant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('adress');
            $table->integer('zipCode');
            $table->string('town');
            $table->string('country');
            $table->text('description');
            $table->integer('review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_restaurant');
    }
}
