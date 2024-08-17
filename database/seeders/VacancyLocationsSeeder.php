<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use App\Models\VacancyContent;
use App\Models\VacancyLocation;
use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Media;
use App\Models\NewsContent;

class VacancyLocationsSeeder extends Seeder
{
    public function run()
    {
        VacancyLocation::create(['location' => 'Any']);
        VacancyLocation::create(['location' => 'Connaught']);
        VacancyLocation::create(['location' => 'Cork']);
        VacancyLocation::create(['location' => 'Dublin']);
        VacancyLocation::create(['location' => 'Leinster']);
        VacancyLocation::create(['location' => 'Munster']);
    }
}
