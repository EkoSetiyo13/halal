<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterBinaanController extends Controller
{
    public function viewBinaan()
    {
        if (Auth::user()->is_admin == 1) {
            return redirect('/admin/halal');
        } else if (Auth::user()->nama_role == 'penyuplai') {
            return redirect('/member/form-penyuplai');
        } else if (Auth::user()->nama_role == 'binaan') {
            return redirect('/member/halal/binaan');
        } else {
            return redirect('/member/form-penyuplai');
        }
        return view('auth.register_binaan');
    }

    protected function createBinaan(Request $request)
    {
        // dd($request->all());
        $data = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'is_admin' => $request['is_admin'],
            'is_member' => $request['is_member'],
            'nama_role' => $request['nama_role'],
        ]);
        return redirect('/login');
    }
}
