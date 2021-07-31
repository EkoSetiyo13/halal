<?php


namespace App\Services;

class JSONLDService
{
    /**
     * @param $binaan
     * @return array
     */
    static public function generateBinaanJSONLD($binaan)
    {
        $alamat = $binaan->alamat ?? '';
        $desa = $binaan->desa ?? '';
        $kecamatan = $binaan->kecamatan ?? '';
        $kota = $binaan->kota ?? '';

        $fulladdress = "$alamat, $desa. $kecamatan, $kota";

        $namaProduk = $binaan->nama_produk ?? '';

        $jsonld = [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => $binaan->nama_produk ?? '',
            'brand' => [
                '@type' => 'Organization',
                'name' => $binaan->nama_umkm ?? '',
                'founder' => [
                    '@type' => 'Person',
                    'name' => $binaan->nama_pemilik ?? ''
                ],
                'address' => $fulladdress ?? '',
                'identifier' => $binaan->no_umkm ?? '',
                'telephone' => $binaan->no_wa ?? ''
            ],
            'description' => !empty($namaProduk) ? "$namaProduk halal oleh " . $binaan->nama_umkm ?? '' : '',
            'sku' => $binaan->no_umkm . '-HALAL-1'
        ];
        if (!empty($binaan->image ?? '')) {
            $filename = $binaan->image;
            $jsonld['image'] = asset("storage/products/$filename");
        }
        return $jsonld;
    }
}