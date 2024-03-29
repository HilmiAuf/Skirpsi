<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Hilmi',
            'email' => 'muhammadhilmi130@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password_confirmation' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'utype' => 'ADM',
            'remember_token' => Str::random(10),
        ]);
        Category::create([
            'name' => 'akad nikah',
            'slug' => 'akad nikah'
        ]);

        Category::create([
            'name' => 'pernikahan',
            'slug' => 'pernikahan'
        ]);
    }
}
