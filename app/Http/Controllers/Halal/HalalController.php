<?php

namespace App\Http\Controllers\Halal;

use App\Umkm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HalalController extends Controller
{
    public function home()
    {
        return view('halal.home.example');
    }

    public function binaan()
    {
        $umkms = Umkm::orderBy('id', 'ASC')->get();
        $data = 'makanan';
        //return response()->json($umkms);
        return view('halal.home.binaan', compact('umkms'));
    }

    public function detailBinaan($no_binaan)
    {
        $data = $no_binaan;
        $binaan = Umkm::where('no_umkm', $no_binaan)->first();
        $qrcodeWithLogo = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(100)->errorCorrection('H')->generate('halal.its.ac.id/binaan/2020-' . $binaan->no_umkm);
        $qrcode = QrCode::format('png')->size(100)->errorCorrection('H')->generate('halal.its.ac.id/binaan/2020-' . $binaan->no_umkm);

        $downloadQrcodeWithLogo = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(1000)->errorCorrection('H')->generate('halal.its.ac.id/binaan/2020-' . $binaan->no_umkm);
        $downloadQrCode = QrCode::format('png')->size(1000)->errorCorrection('H')->generate('halal.its.ac.id/binaan/2020-' . $binaan->no_umkm);
        //return response()->json($binaan->no_umkm);
        return view('halal.home.detail-binaan', compact('binaan', 'qrcode', 'qrcodeWithLogo', 'downloadQrcodeWithLogo', 'downloadQrCode'));
    }










    //=============================================================================================================//
    public function qrCode()
    {
        $imagePng = base64_encode(QrCode::format('png')->size(200)->errorCorrection('H')->generate('W3Adda Laravel Tutorial'));
        $image = QrCode::size(200)->generate('W3Adda Laravel Tutorial');
        return view('code', compact('image', 'imagePng'));
        //return view('halal.home.example');
    }
}
