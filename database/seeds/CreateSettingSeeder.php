<?php

use Illuminate\Database\Seeder;
use App\Setting;

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
