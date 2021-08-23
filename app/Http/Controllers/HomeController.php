<?php

namespace App\Http\Controllers;

use App\FormPenerimaQurban;
use App\FormPenyuplaiQurban;
use App\User;
use App\Umkm;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //Permission Binaan Halal v2
        if (Auth::user()->nama_role == 'binaan') {
            return redirect('admin/halal');
        }

        //Permission Lama
        if (Auth::user()->nama_role == 2) {
            return redirect('member/form-penyuplai');
        } elseif (Auth::user()->nama_role == 3) {
            return redirect('member/form-penerima');
        } else {
            return view('error');
        }
    }

    public function adminHome()
    {
        $userPenyuplai = User::where('nama_role', '=', '2')->count();
        $userPenerima = User::where('nama_role', '=', '3')->count();
        $postinganPenerima = FormPenerimaQurban::where('status', '=', 1)->count();
        $postinganPenerimaNonAktif = FormPenerimaQurban::where('status', '=', 0)->count();
        $postinganPenyuplai = FormPenyuplaiQurban::where('status', '=', 1)->count();
        $postinganPenyuplaiNonAktif = FormpenyuplaiQurban::where('status', '=', 0)->count();


        $penyuplaiAdmin1 = FormPenyuplaiQurban::where('user_id', '=', '1')->count();
        $penerimaAdmin1 = FormPenerimaQurban::where('user_id', '=', '1')->count();
        $admin1 = $penerimaAdmin1 + $penyuplaiAdmin1;

        $penyuplaiAdmin2 = FormPenyuplaiQurban::where('user_id', '=', '2')->count();
        $penerimaAdmin2 = FormPenerimaQurban::where('user_id', '=', '2')->count();
        $admin2 = $penerimaAdmin2 + $penyuplaiAdmin2;

        $penyuplaiAdmin3 = FormPenyuplaiQurban::where('user_id', '=', '3')->count();
        $penerimaAdmin3 = FormPenerimaQurban::where('user_id', '=', '3')->count();
        $admin3 = $penerimaAdmin3 + $penyuplaiAdmin3;

        $penyuplaiAdmin4 = FormPenyuplaiQurban::where('user_id', '=', '4')->count();
        $penerimaAdmin4 = FormPenerimaQurban::where('user_id', '=', '4')->count();
        $admin4 = $penerimaAdmin4 + $penyuplaiAdmin4;

        $penyuplaiAdmin5 = FormPenyuplaiQurban::where('user_id', '=', '5')->count();
        $penerimaAdmin5 = FormPenerimaQurban::where('user_id', '=', '5')->count();
        $admin5 = $penerimaAdmin5 + $penyuplaiAdmin5;

        return view('dashboard.kurban', compact(
            'userPenyuplai',
            'userPenerima',
            'postinganPenerima',
            'postinganPenerimaNonAktif',
            'postinganPenyuplai',
            'postinganPenyuplaiNonAktif',
            'admin1',
            'admin2',
            'admin3',
            'admin4',
            'admin5'
        ));
    }

    public function adminHalal()
    {
        $total_umkm = Umkm::all()->count();
        $total_kader = Umkm::Where('nama_umkm', '=', '-')->count();
        $total_umkm_aktif = $umkms = Umkm::Where('status', '=', true)->Where('nama_umkm', '!=', '-')->count();
        return view('dashboard.halal', compact(
            'total_umkm',
            'total_kader',
            'total_umkm_aktif'
        ));
    }

    public function memberHalal()
    {
        return view('dashboard.member');
    }
}
