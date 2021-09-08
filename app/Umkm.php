<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode as QRCode;

class Umkm extends Model
{
    protected $fillable = [
        'no_umkm',
        'nama_pemilik',
        'nama_umkm',
        'nama_produk',
        'tipe_binaan',
        'alamat',
        'desa',
        'kecamatan',
        'kota',
        'no_wa',
        'email',
        'instagram',
        'facebook',
        'image',
        'status',
        'bpom',
        'pirt',
        'google_map',
        'tokopedia',
        'shopee',
        'bukalapak',
        'website',
        'video',
        'sertifikat_halal',
        'produkdesa',
        'user_id',
        'dosen'
    ];

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="badge badge-secondary">Draft</span>';
        }
        return '<span class="badge badge-success">Aktif</span>';
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['nama_pemilik'] = Str::slug($value);
    }

    public static function getActiveUMKM($pagination = 9)
    {
        $q = self::where([
            ['status', true],
            ['nama_umkm', '!=', '-'],
        ])
            ->orderBy('no_umkm', 'ASC');

        if ($pagination !== -1) {
            return $q->paginate($pagination);
        } else {
            return $q->get();
        }
    }

    public static function getActiveKader($pagination = 9)
    {
        $q = self::where([
            ['status', true],
            ['nama_umkm', '=', '-'],
        ])
            ->orderBy('no_umkm', 'ASC');

        if ($pagination !== -1) {
            return $q->paginate($pagination);
        } else {
            return $q->get();
        }
    }

    public static function fullTextSearchBinaan($query = '', $pagination = 9)
    {
        $documentColumns = [
            'no_umkm',
            'nama_umkm',
            'nama_pemilik',
            'nama_produk'
        ];
        if (trim($query) === '') {
            return self::getActiveUMKM();
        } else {
            return self::fullTextSearch($documentColumns, $query, $pagination);
        }
    }

    public static function fullTextSearchKader($query = '', $pagination = 9)
    {
        $documentColumns = [
            'no_umkm',
            'nama_pemilik'
        ];
        if (trim($query) === '') {
            return self::getActiveUMKM();
        } else {
            return self::fullTextSearch($documentColumns, $query, $pagination);
        }
    }

    public static function fullTextSearch($columns, $query, $pagination)
    {
        $documentColumnsStr = join(" || ' ' || ", $columns);
        return self::whereRaw(
            "to_tsvector($documentColumnsStr) @@ to_tsquery(?) = TRUE", [$query]
        )->paginate($pagination);
    }

    public function getQRCode($type = 'binaan', $size = 1000)
    {
        $url = route('detail.' . $type, ['no_binaan' => $this->no_umkm]);
        return [
            'data:image/png;base64,' . base64_encode(QRCode::format('png')
                ->size($size)
                ->errorCorrection('H')
                ->generate($url)),

            'data:image/png;base64,' . base64_encode(QRCode::format('png')
                ->merge('assets/logo_halal.png', 0.3, true)
                ->size($size)
                ->errorCorrection('H')
                ->generate($url))
        ];
    }
}