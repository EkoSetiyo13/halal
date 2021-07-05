<?php

namespace App\Exports;

use App\Umkm;
use Maatwebsite\Excel\Concerns\FromCollection;

class UmkmsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Umkm::all();
    }
}
