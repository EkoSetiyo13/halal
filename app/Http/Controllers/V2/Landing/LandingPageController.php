<?php

namespace App\Http\Controllers\V2\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('v2.landing.kurban.layout.app');
    }
}
