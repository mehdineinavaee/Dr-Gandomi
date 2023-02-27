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
        Schema::create('blog_right_sidebars', function (Blueprint $table) {
            $table->id();
            $table->string('cover');
            $table->text('title', '255');
            $table->text('description', '5000');
            $table->text('tags', '1000');
            $table->date('date', '10');
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
        Schema::dropIfExists('blog_right_sidebars');
    }
};
