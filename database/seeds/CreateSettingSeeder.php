<?php

use App\Setting;
use Illuminate\Database\Seeder;

class CreateSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([]);
    }
}
