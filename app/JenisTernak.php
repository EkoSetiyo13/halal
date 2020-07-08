<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class JenisTernak extends Model
{
    protected $fillable = ['name', 'parent_id', 'slug'];

    public function scopeGetParent($query)
    {
        return $query->whereNull('parent_id');
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function parent()
    {
        return $this->belongsTo(JenisTernak::class);
    }

    public function child()
    {
        return $this->hasMany(JenisTernak::class, 'parent_id');
    }

    public function productTernak()
    {
        return $this->hasMany(Product::class);
    }

    public function productPenerima()
    {
        return $this->hasMany(FormPenerimaQurban::class);
    }

    public function productPenyuplai()
    {
        return $this->hasMany(FormPenyuplaiQurban::class);
    }
}
