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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('brand_id')->constrained();
            $table->string('name');
            $table->string('model');
            $table->string('seater');
            $table->string('price');
            $table->string('plate')->unique;
            $table->string('driver')->unique;
            $table->string('isAvailable');
            $table->string('fuelType');
            $table->longText('extra')->nullable();
            $table->string('photopath1');
            $table->string('photopath2')->nullable();
            $table->string('photopath3')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
};
