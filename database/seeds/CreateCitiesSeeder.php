<?php

use App\City;
use App\Province;
use League\Csv\Reader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CreateCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUser = Reader::createFromPath(database_path('seeds/csv/cities.csv'), 'r');
        $dataUser->setDelimiter(',');
        $dataUser->setHeaderOffset(0);


        foreach ($dataUser as $data) {
            $province = Province::firstOrCreate(['id' => $data['province_id']], ['name' => $data['province_name']]);

            City::create([
                'province_id' => $province->id,
                'name' => $data['name'],
            ])->id;
        }
    }

    private function nullChecker($data)
    {
        if ($data == '' || $data == null || $data == -1)
            return null;
        return $data;
    }
}
