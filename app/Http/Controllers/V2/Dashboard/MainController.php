<?php

namespace App\Http\Controllers\V2\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('v2.dashboard.layout.app');
    }
}
