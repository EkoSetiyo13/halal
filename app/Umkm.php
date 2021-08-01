<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

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
        'video'
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

}