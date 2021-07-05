<?php

namespace App\Http\Controllers\V2\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('v2.auth.login');
    }
}
