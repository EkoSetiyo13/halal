<?php

namespace App\Http\Controllers\Halal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Setting;


class SettingController extends Controller
{
    public function SettingView()
    {
        $data = Setting::first();
        $regis_active = $data->is_active_registration_binaan;
        return view('settings.index', compact('data', 'regis_active'));
    }

    public function switchStatusRegis()
    {
        $data = Setting::first();
        $regis_active = $data->is_active_registration_binaan;
        $data->is_active_registration_binaan = !$regis_active;
        $data->save();
        return redirect()->route('setting.index');
    }
}
