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
        $this->call(UserSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(PodcastsSeeder::class);
        $this->call(NewsSustainabilitySeeder::class);
        $this->call(ReportsSeeder::class);
        $this->call(VacancyCategoriesSeeder::class);
        $this->call(VacancyLocationsSeeder::class);
        $this->call(VacanciesSeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(EmailSettingsSeeder::class);
    }
}
