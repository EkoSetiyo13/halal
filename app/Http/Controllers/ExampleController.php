<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('example.body');
    }

    public function error()
    {
        return view('error');
    }

    public function coba()
    {
        return view('template.index');
    }


    public function barcode()
    {
        return view('barcode');
    }

    public function checkSql()
    {
        $kota_s = DB::table('umkms')->where('kota', '=', 'Surabaya​')->get();
        return $kota_s;
    }
}
