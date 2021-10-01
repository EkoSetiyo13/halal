<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UMKMRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_umkm' => 'required|string|max:255',
            'nama_umkm' => 'required|string|max:255',
            'nama_pemilik' => 'required|string|max:255',
            'status' => 'required|boolean',
            'tipe_binaan' => [
                'required',
                Rule::in([
                    'A',
                    'B',
                    'C'
                ])
            ],
            'pirt' => 'nullable|string|max:255',
            'alamat' => 'required|string|max:255',
            'desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kota' => 'nullable||string|max:255',
            'google_map' => 'nullable|string',
            'no_wa' => 'required|string|max:255',
            'email' => 'nullable|email',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'tokopedia' => 'nullable|string|max:255',
            'shopee' => 'nullable|string|max:255',
            'bukalapak' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'nama_produk' => 'required|string|max:255',
            'bpom' => 'nullable|string|max:255',
            'image' => 'image',
            'video' => 'nullable|string|max:255',
            'sertifikat_halal' => 'nullable|string|max:255',
            'produk_desa' => 'nullable|string|max:255',
            'user_id' => 'nullable|integer',
            'dosen' => 'nullable|string|max:255',
            'cities_id' => 'nullable|integer',
        ];
    }
}
