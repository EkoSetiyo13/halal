<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use App\City;


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
        DB::connection('pgsql')->statement("TRUNCATE TABLE ONLY cities RESTART IDENTITY CASCADE");
        foreach ($dataUser as $data) {
            City::create([
                'province_id' => $this->nullChecker($data['province_id']),
                'name' => $this->nullChecker($data['name']),
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
