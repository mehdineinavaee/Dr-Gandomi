<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('home_ones')->insert([
            [
                'welcome' => 'به سایت دکتر گندمی خوش آمدید',
                'slogen' => 'آموزش در سطح جهانی برای ساختن آینده قابل استفاده است',
                'backgroundBanner' => 'NULL',
                'banner' => 'NULL',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('grades')->insert([
            [
                'title' => 'کاردانی',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'کارشناسی',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'کارشناسی ارشد',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'دکتری',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('contacts')->insert([
            [
                'google_map_area' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3389.4680603160573!2d54.3493974!3d31.8394762!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fa619546e0ce4ff%3A0xb15335001a40852b!2sAzad%20Islamic%20University%20Of%20Yazd!5e0!3m2!1sen!2s!4v1675928862263!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'address' => 'دانشگاه آزاد اسلامی واحد یزد',
                'email' => 'abolfazlgandomi@gmail.com',
                'tell' => '09133552993',
                'facebook' => 'www.facebook.com',
                'instagram' => 'www.instagram.com',
                'linkedin' => 'www.linkedin.com',
                'twitter' => 'www.twitter.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('settings')->insert([
            [
                'tel' => '09133552993',
                'logo' => 'NULL',
                'favicon' => 'NULL',
                'footer_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorum tempore tenetur tempora nostrum totam molestias dolores recusandae saepe maxime ut excepturi exercitationem, inventore pariatur! Laborum explicabo eius veritatis iste.',
                'address' => 'دانشگاه آزاد اسلامی واحد یزد',
                'email' => 'abolfazlgandomi@gmail.com',
                'phone' => '03582011111',
                'courses' => 'NULL',
                'blog' => 'NULL',
                'our_professors' => 'NULL',
                'faqs' => 'NULL',
                'gallery' => 'NULL',
                'my_account' => 'NULL',
                'events' => 'NULL',
                'event_details' => 'NULL',
                'products' => 'NULL',
                'cart' => 'NULL',
                'contact' => 'NULL',
                'settings' => 'NULL',
                'home_one' => 'NULL',
                'categories' => 'NULL',
                'modes' => 'NULL',
                'publishers' => 'NULL',
                'authors' => 'NULL',
                'translators' => 'NULL',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('translators')->insert([
            [
                'first_name' => 'این کتاب',
                'last_name' => 'مترجم ندارد',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
