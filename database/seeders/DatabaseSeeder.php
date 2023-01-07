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
                'linkedin' => 'linkedin',
                'twitter' => 'twitter',
                'instagram' => 'instagram',
                'facebook' => 'facebook',
            ],
        ]);
    }
}
