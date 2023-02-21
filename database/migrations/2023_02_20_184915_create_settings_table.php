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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('tel');
            $table->string('logo');
            $table->string('favicon');
            $table->text('footer_description', '500');
            $table->text('address', '500');
            $table->text('email');
            $table->text('phone');
            $table->string('courses');
            $table->string('blog');
            $table->string('our_professors');
            $table->string('faqs');
            $table->string('gallery');
            $table->string('my_account');
            $table->string('events');
            $table->string('event_details');
            $table->string('products');
            $table->string('cart');
            $table->string('wishlist');
            $table->string('contact');
            $table->string('settings');
            $table->string('home_one');
            $table->string('categories');
            $table->string('modes');
            $table->string('publishers');
            $table->string('authors');
            $table->string('translators');
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
        Schema::dropIfExists('settings');
    }
};
