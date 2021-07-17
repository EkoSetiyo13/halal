<?php

namespace App\Http\Controllers\V2\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\FormPenerimaQurban;
use App\FormPenyuplaiQurban;
use App\Post;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        $penerima = FormPenerimaQurban::where('status', '=', 1)->orderBy('created_at', 'DESC')->paginate(3);
        $penyuplai = FormPenyuplaiQurban::where('status', '=', 1)->orderBy('created_at', 'DESC')->paginate(3);
        $total_penerima = FormPenerimaQurban::where('status', '=', 1)->count();
        $total_penyuplai = FormPenyuplaiQurban::where('status', '=', 1)->count();
        $post1  = Post::find(1);
        // dd($penyuplai);
        return view('v2.landing.kurban.main.app', compact('products', 'penerima', 'penyuplai', 'post1', 'total_penerima', 'total_penyuplai'));
    }

    public function penerima()
    {
        $penerima = FormPenerimaQurban::orderBy('created_at', 'DESC')->paginate(2);
        return view('v2.landing.kurban.main.penerima-kurban', compact('penerima'));
    }
    public function penerimaItem($id)
    {
        $penerima = FormPenerimaQurban::find($id);
        return view('v2.landing.kurban.main.item-penerima-kurban', compact('penerima'));
    }

    public function penyuplai()
    {
        $penyuplai = FormPenyuplaiQurban::orderBy('created_at', 'DESC')->paginate(2);
        return view('v2.landing.kurban.main.penyuplai-kurban', compact('penyuplai'));
    }

    public function penyuplaiItem($id)
    {
        $penyuplai = FormPenyuplaiQurban::find($id);
        return view('v2.landing.kurban.main.item-penyuplai-kurban', compact('penyuplai'));
    }
}
