<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginBinaanController extends Controller
{
    use AuthenticatesUsers;

    public function viewLogin()
    {
        return view('auth.login_binaan');
    }


    public function checkLogin()
    {
        $user = Auth::user();
        return $user;
    }
}
