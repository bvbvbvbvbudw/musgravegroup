<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportsSeeder extends Seeder
{
    public function run()
    {
       $file = File::create([
           'path' => '.pdf',
       ]);

       Report::create([
           'file_id' => $file->id,
           'media_id' => 1,
           'title' => 'Test',
       ]);
    }
}
