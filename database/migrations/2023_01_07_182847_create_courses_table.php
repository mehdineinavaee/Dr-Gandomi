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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', '255');
            $table->string('cover')->nullable();
            $table->text('description', '5000')->nullable();
            $table->string('duration', '50')->nullable();
            $table->date('start_dates', '10')->nullable();
            $table->integer('fee')->length(50)->nullable();
            $table->string('language', '50')->nullable();
            $table->integer('seats_available')->length(10)->nullable();
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
        Schema::dropIfExists('courses');
    }
};
