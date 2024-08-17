<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use App\Models\VacancyContent;
use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Media;
use App\Models\NewsContent;

class VacancyCategoriesSeeder extends Seeder
{
    public function run()
    {
        VacancyCategory::create(['category' => 'Any']);
        VacancyCategory::create(['category' => 'Bakery']);
        VacancyCategory::create(['category' => 'Business Development']);
        VacancyCategory::create(['category' => 'Butchery']);
        VacancyCategory::create(['category' => 'Commercial']);
        VacancyCategory::create(['category' => 'Communications']);
        VacancyCategory::create(['category' => 'Customer Services']);
        VacancyCategory::create(['category' => 'Finance']);
        VacancyCategory::create(['category' => 'Human Resources']);
        VacancyCategory::create(['category' => 'IT']);
        VacancyCategory::create(['category' => 'Logistics / Supply Chain']);
        VacancyCategory::create(['category' => 'Marketing']);
        VacancyCategory::create(['category' => 'Operations']);
        VacancyCategory::create(['category' => 'Retail Management']);
        VacancyCategory::create(['category' => 'Retail Sales']);
        VacancyCategory::create(['category' => 'Retailer Services']);
        VacancyCategory::create(['category' => 'Sales & Development']);
        VacancyCategory::create(['category' => 'Store Development']);
        VacancyCategory::create(['category' => 'Trading']);
    }
}
