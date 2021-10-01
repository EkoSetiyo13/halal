<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Setting;

class RegisterBinaanController extends Controller
{
    public function viewBinaan()
    {
        $data = Setting::first();
        $regis_active = $data->is_active_registration_binaan;
        if ($regis_active) {
            return view('auth.register_binaan');
        } else {
            return view('error');
        }
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
