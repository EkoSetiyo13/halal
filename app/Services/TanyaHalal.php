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
            ->limit($limit);

        $tanggal = '31-march-2022';
        $penerbit = 'HALAL ITS';

        $whereDocUMKM = join(" || ' ' || ", ['nama_produk', 'nama_umkm', 'no_umkm', "'$tanggal $penerbit'"]);
        $query = DB::table('umkms')
            ->selectRaw(
                join(', ', [
                    'nama_produk AS produk',
                    'nama_umkm AS perusahaan',
                    'no_umkm AS sertifikat',
                    "'$tanggal' as tanggal",
                    "'$penerbit' as penerbit"
                ])
            )
            ->whereRaw("lower($whereDocUMKM) LIKE '%$query%'")
            ->limit($limit)
            ->union($mui);

        return $query->get()->toArray();
    }

    public static function tanyaHalal($query, $limit = 10)
    {
        $query = strtolower($query);
        return Cache::remember("tanyaHalal:$query", 86400, function () use ($query, $limit) {
            return self::getFreshTanyaHalal($query, $limit);
        });
    }
}