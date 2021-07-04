<?php

namespace App\Http\Controllers\V2\Dashboard\ManagementKurban;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenyuplaiKurbanController extends Controller
{
    public function index()
    {
        return view('v2.dashboard.management-kurban.tambah-penyuplai');
    }
}
