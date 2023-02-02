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
        Schema::create('campus_information', function (Blueprint $table) {
            $table->id();
            $table->text('about_our_campus', '5000')->nullable();
            $table->text('campus_facilities', '5000')->nullable();
            $table->text('other_campus_information', '5000')->nullable();
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
        Schema::dropIfExists('campus_information');
    }
};
