<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vacancy;
use App\Models\VacancyContent;
use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Media;
use App\Models\NewsContent;

class VacanciesSeeder extends Seeder
{
    public function run()
    {
        $content1 = VacancyContent::create([
            'content' => 'Tkfksf gjfkgjfklgjdflk gjfk gjdlkj gf djgkd'
        ]);
        $content2 = VacancyContent::create([
            'content' => "fds jskg jg kfdjgk fl jgdfkgjklfd gjdl",
        ]);

        $vacancy1 = Vacancy::create([
            'url' => 'test1',
            'type' => '',
            'title' => 'PHP LARAVEL',
            'location_id' => 1,
            'contract_type' => "Contract",
            'end_date' => now()->addDays(1),
            'category_id' => 1,
            'content_id' => $content1 -> id,
        ]);
        $vacancy2 = Vacancy::create([
            'url' => 'test2',
            'type' => 'IT',
            'title' => ' fjdsf jfkdsjfks',
            'location_id' => 2,
            'contract_type' => "Free",
            'category_id' => 2,
            'end_date' => now()->addDays(1),
            'content_id' => $content2 -> id,
        ]);
    }
}
