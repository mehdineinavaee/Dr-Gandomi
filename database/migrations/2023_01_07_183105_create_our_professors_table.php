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
        Schema::create('our_professors', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->nullable();
            $table->string('full_name', '255');
            $table->string('post', '20');
            $table->string('twitter', '50')->nullable();
            $table->string('linkedin', '50')->nullable();
            $table->string('instagram', '50')->nullable();
            $table->string('facebook', '50')->nullable();
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
        Schema::dropIfExists('our_professors');
    }
};
