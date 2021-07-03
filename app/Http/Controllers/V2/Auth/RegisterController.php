<?php

namespace App\Http\Controllers\V2\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('v2.auth.register');
    }
}
