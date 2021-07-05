<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\FormPenerimaQurban;
use App\FormPenyuplaiQurban;
use App\Post;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        $penerima = FormPenerimaQurban::where('status', '=', 1)->orderBy('created_at', 'DESC')->paginate(4);
        $penyuplai = FormPenyuplaiQurban::where('status', '=', 1)->orderBy('created_at', 'DESC')->paginate(4);
        $post1  = Post::find(1);
        return view('ecommerce.index', compact('products', 'penerima', 'penyuplai', 'post1'));
    }

    public function product()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('ecommerce.product', compact('products'));
    }

    public function penerima()
    {
        $penerima = FormPenerimaQurban::orderBy('created_at', 'DESC')->paginate(2);
        return view('ecommerce.all-penerima', compact('penerima'));
    }

    public function penyuplai()
    {
        $penyuplai = FormPenyuplaiQurban::orderBy('created_at', 'DESC')->paginate(2);
        return view('ecommerce.all-penyuplai', compact('penyuplai'));
    }

    public function categoryProduct($slug)
    {
        $products = Category::where('slug', $slug)->first()->product()->orderBy('created_at', 'DESC')->paginate(12);
        return view('ecommerce.product', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::with(['category'])->where('slug', $slug)->first();
        return view('ecommerce.show', compact('product'));
    }

    public function showPenerima($slug)
    {
        $penerima = FormPenerimaQurban::where('slug', $slug)->first();
        return view('ecommerce.show-penerima', compact('penerima'));
    }

    public function showPenyuplai($slug)
    {
        $penyuplai = FormPenyuplaiQurban::where('slug', $slug)->first();
        return view('ecommerce.show-penyuplai', compact('penyuplai'));
    }

    public function kontak()
    {
        $nomer = array("0895396033024", "0816342045", "082231922979", "085741677040");
        $random = array_rand($nomer, 2);
        $admin1 = $nomer[$random[0]];
        $admin2 = $nomer[$random[1]];
        return view('ecommerce.cara-pendaftaran', compact('admin1', 'admin2'));
    }

}