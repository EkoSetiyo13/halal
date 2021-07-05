<?php

namespace App\Imports;

use App\Umkm;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UmkmsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Umkm([
            'no_umkm'       => $row[0],
            'nama_pemilik'  => $row[1],
            'nama_umkm'     => $row[2],
            'nama_produk'   => $row[3],
            'tipe_binaan'   => $row[4],
            'alamat'        => $row[5],
            'desa'          => $row[6],
            'kecamatan'     => $row[7],
            'kota'          => $row[8],
            'status'        => $row[9],
            'no_wa'         => $row[10],
            'email'         => $row[11],
            'instagram'     => $row[12],
            'facebook'      => $row[13]
        ]);
    }
}
