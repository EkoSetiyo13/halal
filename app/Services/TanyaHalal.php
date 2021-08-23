<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class TanyaHalal
{
    public static function getFreshTanyaHalal($query, $limit)
    {
        $whereDoc = join(' || \' \' || ', ['produk', 'perusahaan', 'sertifikat', 'tanggal', 'penerbit']);
        $mui = DB::table('certified_products')
            ->select(
                'produk',
                'perusahaan',
                'sertifikat',
                'tanggal',
                'penerbit'
            )
            ->whereRaw("lower($whereDoc) LIKE '%$query%'")
            ->limit($limit)
            ->get()
            ->toArray();

        $tanggal = '31-march-2022';
        $penerbit = 'Binaan Halal ITS';

        $whereDocBinaan = join(" || ' ' || ", ['nama_produk', 'nama_umkm', 'no_umkm', "'$tanggal $penerbit'"]);
        $binaan = DB::table('umkms')
            ->selectRaw(
                join(', ', [
                    'nama_produk AS produk',
                    'nama_umkm AS perusahaan',
                    'no_umkm AS sertifikat',
                    "'$tanggal' as tanggal",
                    "'$penerbit' as penerbit"
                ])
            )
            ->whereRaw("lower($whereDocBinaan) LIKE '%$query%'")
            ->limit($limit)
            ->get()
            ->toArray();
        return compact('mui', 'binaan');
    }

    public static function tanyaHalal($query, $limit = 15)
    {
        $query = strtolower($query);
        return Cache::remember("tanyaHalal:$query", 86400, function () use ($query, $limit) {
            return self::getFreshTanyaHalal($query, $limit);
        });
    }
}