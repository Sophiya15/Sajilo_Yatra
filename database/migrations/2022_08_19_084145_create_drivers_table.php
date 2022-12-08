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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role')->default('driver');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('age');
            $table->string('license');
            $table->string('experience');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('citizenship')->unique();
            $table->string('photopath0');
            $table->rememberToken();
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
        Schema::dropIfExists('drivers');
    }
};
