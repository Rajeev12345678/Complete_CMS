<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
          'site_name' => "Laravel's Blog",
          'address' => 'Russia, Petersburg',
          'contact_number' => '0123456789',
          'contact_email' => 'info@laravel.com'
        ]);
    }
}
