<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsSeeder extends Seeder
{
    public function run()
    {
        Brand::insert([
            [
                'name' => 'Brand 1',
                'title' => 'Title 1',
                'small_description' => 'This is a small description for Brand 1.',
                'url' => 'https://brand1.example.com',
                'media_logo_id' => 1,
                'media_bg_id' => 1,
                'status' => 'approved',
            ],
            [
                'name' => 'Brand 2',
                'title' => 'Title 2',
                'small_description' => 'This is a small description for Brand 2.',
                'url' => 'https://brand2.example.com',
                'media_logo_id' => 1,
                'media_bg_id' => 1,
                'status' => 'approved',
            ],
        ]);
    }
}
