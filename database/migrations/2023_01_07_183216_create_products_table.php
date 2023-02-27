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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->nullable();
            $table->string('cover_detail')->nullable();
            $table->string('title', '255');
            $table->integer('price')->length(50);
            $table->string('discount', '3');
            $table->string('total', '50');
            $table->boolean('new')->default(0);
            $table->string('edition', '10');
            $table->text('description', '5000')->nullable();
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
        Schema::dropIfExists('products');
    }
};
