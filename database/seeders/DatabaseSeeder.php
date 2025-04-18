<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Cissé Issa Ngahama',
            'email' => 'admin@cissedesign.com',
            'password' => bcrypt('admin123'),
        ]);

        // Seed all data
        $this->call([
            ServiceSeeder::class,
            SkillSeeder::class,
            ProjectSeeder::class,
            TestimonialSeeder::class,
            QuoteSeeder::class,
        ]);
    }
}
