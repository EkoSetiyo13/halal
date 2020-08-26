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
        $binaan = Umkm::all()->random(10); 
        //return response()->json($binaan);
        return view('halal.home.example', compact('binaan'));
    }

    public function binaan()
    {
        $umkms = Umkm::Where('status', '=', true)->Where('nama_umkm', '!=', '-')->orderBy('no_umkm', 'ASC')->paginate(9);
        $data = 'makanan';
        //return response()->json($umkms);
        return view('halal.home.binaan', compact('umkms'));
    }

    public function kader()
    {
        $umkms = Umkm::Where('nama_umkm', '=', '-')->orderBy('no_umkm', 'ASC')->paginate(9);
        $data = 'makanan';
        //return response()->json($umkms);
        return view('halal.home.kader', compact('umkms'));
    }
    

    public function cariBinaan(Request $request)
    {
        $query = $request->get('q');
        $umkms = Umkm::where('nama_pemilik', 'LIKE', '%' . $query . '%')
                            ->orWhere('nama_umkm', 'LIKE', '%'.$query.'%' )
                            ->orWhere('no_umkm', 'LIKE', '%'.$query.'%' )
                            ->orWhere('nama_produk', 'LIKE', '%'.$query.'%' )
                            ->paginate(5);
        
        
        //return response()->json($umkms);
        return view('halal.home.binaan', compact('umkms', 'query'));
    }

    public function cariKader(Request $request)
    {
        $query = $request->get('q');
        $umkms = Umkm::Where('nama_umkm', '=', '-')
                            ->where('nama_pemilik', 'LIKE', '%' . $query . '%')
                            ->orWhere('nama_umkm', 'LIKE', '%'.$query.'%' )
                            ->orWhere('no_umkm', 'LIKE', '%'.$query.'%' )
                            ->orWhere('nama_produk', 'LIKE', '%'.$query.'%' )
                            ->paginate(5);
        
        
        //return response()->json($umkms);
        return view('halal.home.kader', compact('umkms', 'query'));
    }

    public function detailBinaan($no_binaan)
    {
        $data = $no_binaan;
        $binaan = Umkm::where('no_umkm', $no_binaan)->first();

        //binaan
        $qrcodeWithLogo = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(300)->errorCorrection('H')->generate('http://halal.its.ac.id/binaan/' . $binaan->no_umkm);
        $qrcode = QrCode::format('png')->size(300)->errorCorrection('H')->generate('http://halal.its.ac.id/binaan/' . $binaan->no_umkm);

        $downloadQrcodeWithLogo = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(1000)->errorCorrection('H')->generate('http://halal.its.ac.id/binaan/' . $binaan->no_umkm);
        $downloadQrCode = QrCode::format('png')->size(1000)->errorCorrection('H')->generate('http://halal.its.ac.id/binaan/' . $binaan->no_umkm);
 
        //binaan
        $qrcodeWithLogoKader = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(300)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
        $qrcodeKader = QrCode::format('png')->size(300)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
    
        $downloadQrcodeWithLogoKader = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(1000)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
        $downloadQrCodeKader = QrCode::format('png')->size(1000)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
    

        //return response()->json($binaan->no_umkm);
        return view('halal.home.detail-binaan', compact('binaan', 'qrcode', 'qrcodeWithLogo', 'downloadQrcodeWithLogo', 'downloadQrCode'));
    }

    public function detailKader($no_binaan)
    {
        $data = $no_binaan;
        $binaan = Umkm::where('no_umkm', $no_binaan)->first();
 
        //binaan
        $qrcodeWithLogoKader = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(300)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
        $qrcodeKader = QrCode::format('png')->size(300)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
    
        $downloadQrcodeWithLogoKader = QrCode::format('png')->merge('assets/logo_halal.png', 0.3, true)->size(1000)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
        $downloadQrCodeKader = QrCode::format('png')->size(1000)->errorCorrection('H')->generate('http://halal.its.ac.id/kader/' . $binaan->no_umkm);
    

        //return response()->json($binaan->no_umkm);
        return view('halal.home.detail-kader', compact('binaan', 'qrcodeKader', 'qrcodeWithLogoKader', 'downloadQrcodeWithLogoKader', 'downloadQrCodeKader'));
    }

    public function hapusSemua()
    {
        Umkm::truncate();
        $umkms = Umkm::orderBy('id', 'ASC')->get();
        if($umkms == null)
        {
            $data="data berhasil di hapus";
            return response()->json($data);
        }
        return response()->json($umkms);
        
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
