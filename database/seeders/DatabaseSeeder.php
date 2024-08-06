<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(NewsSeeder::class);
        $this->call(PodcastsSeeder::class);
        $this->call(NewsSustainabilitySeeder::class);
    }
}
