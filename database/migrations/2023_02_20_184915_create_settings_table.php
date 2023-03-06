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
            // Header
            $table->string('phone_number', '11')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            // Footer
            $table->text('footer_description', '500')->nullable();
            $table->string('address', '500')->nullable();
            $table->string('email', '50')->nullable();
            $table->string('tel', '11')->nullable();
            $table->string('facebook', '50')->nullable();
            $table->string('instagram', '50')->nullable();
            $table->string('linkedin', '50')->nullable();
            $table->string('twitter', '50')->nullable();
            // Contact
            $table->string('google_map_area', '1000');
            // Breadcrumb background images
            $table->string('courses')->nullable();
            $table->string('blog')->nullable();
            $table->string('our_professors')->nullable();
            $table->string('faqs')->nullable();
            $table->string('gallery')->nullable();
            $table->string('my_account')->nullable();
            $table->string('events')->nullable();
            $table->string('event_details')->nullable();
            $table->string('products')->nullable();
            $table->string('cart')->nullable();
            $table->string('contact')->nullable();
            $table->string('settings')->nullable();
            $table->string('home_one')->nullable();
            $table->string('categories')->nullable();
            $table->string('modes')->nullable();
            $table->string('publishers')->nullable();
            $table->string('authors')->nullable();
            $table->string('translators')->nullable();
            $table->string('study')->nullable();
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
