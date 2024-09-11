<?php

namespace Database\Seeders;

use App\Models\EmailSetting;
use Illuminate\Database\Seeder;

class EmailSettingsSeeder extends Seeder
{
    public function run()
    {
        EmailSetting::create([
            'email_address' => 'info@musgraveofficial.com',
            'should_send' => true,
        ]);
    }
}
