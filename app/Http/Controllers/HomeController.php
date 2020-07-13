<?php

namespace App\Http\Controllers;
use App\FormPenerimaQurban;
use App\FormPenyuplaiQurban;
use App\User;
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
        if(Auth::user()->nama_role == 2)
        {
            return redirect('member/form-penyuplai');
        }
        elseif (Auth::user()->nama_role == 3) 
        {
            return redirect('member/form-penerima');
        }
        else {
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
        return view('home', compact(
            'userPenyuplai',
            'userPenerima',
            'postinganPenerima',
            'postinganPenerimaNonAktif',
            'postinganPenyuplai',
            'postinganPenyuplaiNonAktif'
        ));
    }
}
