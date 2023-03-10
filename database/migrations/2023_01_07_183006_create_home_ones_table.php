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
        Schema::create('home_ones', function (Blueprint $table) {
            $table->id();
            $table->string('backgroundBanner')->nullable();
            $table->string('banner')->nullable();
            $table->string('welcome', '100')->nullable();
            $table->string('slogan', '100')->nullable();
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
        Schema::dropIfExists('home_ones');
    }
};
