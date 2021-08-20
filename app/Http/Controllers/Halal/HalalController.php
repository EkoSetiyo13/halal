<?php

namespace App\Http\Controllers\Halal;

use App\Umkm;
use App\Services\TanyaHalal;
use Illuminate\Http\Request;
use App\Services\JSONLDService;
use App\Http\Controllers\Controller;

class HalalController extends Controller
{
    public function home()
    {
        $binaan = Umkm::all()->random(10);
        //return response()->json($binaan);
        return view('halal.home.index', compact('binaan'));
    }

    public function binaan(Request $request)
    {
        $query = $request->query('q') ?? '';
        $umkms = !empty($query) ? Umkm::fullTextSearchBinaan($query) : Umkm::getActiveUMKM();
        return view('halal.home.binaan', compact('umkms', 'query'));
    }

    public function binaanJSON(Request $request)
    {
        $umkms = Umkm::getActiveUMKM(-1);
        return response()->json($umkms->all());
    }

    public function kader(Request $request)
    {
        $query = $request->query('q') ?? '';
        $umkms = !empty($query) ? Umkm::fullTextSearchKader($query) : Umkm::getActiveKader();
        return view('halal.home.kader', compact('umkms', 'query'));
    }

    public function kaderJson(Request $request)
    {
        $umkms = Umkm::getActiveKader(-1);
        return response()->json($umkms->all());
    }


    public function dataDosen()
    {
        $nomerKetua = '1';
        $nomerWakilKetua = '2';
        $nomerDosen = array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20');
        return view('halal.home.data-dosen', compact('nomerKetua', 'nomerWakilKetua', 'nomerDosen'));
    }

    public function dataMahasiswa()
    {
        $nomerMahasiswa = array('21', '22', '23', '24');
        return view('halal.home.data-mahasiswa', compact('nomerMahasiswa'));
    }

    public function detailBinaan($no_binaan)
    {
        $binaan = Umkm::where([
            ['nama_umkm', '!=', '-'],
            ['status', '=', true],
            ['no_umkm', $no_binaan]
        ])->first();

        if ($binaan == null) {
            return view('error');
        }

        list($plainQRCode, $logoQRCode) = $binaan->getQRCode('binaan', 1000);

        /**
         * Generate JSON-LD array for Product schema
         */
        $jsonld = JSONLDService::generateBinaanJSONLD($binaan);
        return view('halal.home.detail-binaan', compact('binaan', 'plainQRCode', 'logoQRCode', 'jsonld'));
    }

    public function detailBinaanJson($no_binaan)
    {
        $binaan = Umkm::where([
            ['nama_umkm', '!=', '-'],
            ['status', '=', true],
            ['no_umkm', $no_binaan]
        ])->first();

        if ($binaan == null) {
            return response()->json([
                'message' => 'No data'
            ]);
        } else {
            return response()->json($binaan);
        }
    }

    public function detailKader($no_binaan)
    {
        $binaan = Umkm::where([
            ['nama_umkm', '=', '-'],
            ['status', '=', true],
            ['no_umkm', $no_binaan]
        ])->first();

        if ($binaan == null) {
            return view('error');
        }

        list($plainQRCode, $logoQRCode) = $binaan->getQRCode('kader', 1000);

        return view('halal.home.detail-kader', compact('binaan', 'plainQRCode', 'logoQRCode'));
    }

    public function detailKaderJson($no_binaan)
    {
        $binaan = Umkm::where([
            ['nama_umkm', '=', '-'],
            ['status', '=', true],
            ['no_umkm', $no_binaan]
        ])->first();

        if ($binaan == null) {
            return response()->json([
                'message' => 'No data'
            ]);
        } else {
            return response()->json($binaan);
        }
    }

    public function tanyaHalal(Request $request)
    {
        $query = $request->query('q', '');
        $products = empty($query) ? [] : TanyaHalal::tanyaHalal($query);
        return view('halal.home.tanya-halal', ['query' => $query, 'products' => $products]);
    }
}
