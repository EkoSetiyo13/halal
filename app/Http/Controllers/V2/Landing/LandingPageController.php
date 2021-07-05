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
        $penyuplai = FormPenyuplaiQurban::where('status', '=', 1)->orderBy('created_at', 'DESC')->paginate(33);
        $total_penerima = FormPenerimaQurban::where('status', '=', 1)->count();
        $total_penyuplai = FormPenyuplaiQurban::where('status', '=', 1)->count();
        $post1  = Post::find(1);
        return view('v2.landing.kurban.layout.app', compact('products', 'penerima', 'penyuplai', 'post1', 'total_penerima', 'total_penyuplai'));
    }
}
