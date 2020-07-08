<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\FormPenerimaQurban;
use App\FormPenyuplaiQurban;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        $penerima = FormPenerimaQurban::orderBy('created_at', 'DESC')->paginate(10);
        $penyuplai = FormPenyuplaiQurban::orderBy('created_at', 'DESC')->paginate(10);
        return view('ecommerce.index', compact('products', 'penerima', 'penyuplai'));
    }

    public function product()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('ecommerce.product', compact('products'));
    }

    public function penerima()
    {
        $penerima = FormPenerimaQurban::orderBy('created_at', 'DESC')->paginate(12);
        return view('ecommerce.all-penerima', compact('penerima'));
    }

    public function penyuplai()
    {
        $penyuplai = FormPenyuplaiQurban::orderBy('created_at', 'DESC')->paginate(12);
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

    public function verifyCustomerRegistration($token)
    {
        $customer = Customer::where('activate_token', $token)->first();
        if ($customer) {
            $customer->update([
                'activate_token' => null,
                'status' => 1
            ]);
            return redirect(route('customer.login'))->with(['success' => 'Verifikasi Berhasil, Silahkan Login']);
        }
        return redirect(route('customer.login'))->with(['error' => 'Invalid Verifikasi Token']);
    }

    public function customerSettingForm()
    {
        $customer = auth()->guard('customer')->user()->load('district');
        $provinces = Province::orderBy('name', 'ASC')->get();
        return view('ecommerce.setting', compact('customer', 'provinces'));
    }


    public function referalProduct($user, $product)
    {
        $code = $user . '-' . $product;
        $product = Product::find($product);
        $cookie = cookie('dw-afiliasi', json_encode($code), 2880);
        return redirect(route('front.show_product', $product->slug))->cookie($cookie);
    }

    public function referalPenerima($user, $penerima)
    {
        $code = $user . '-' . $penerima;
        $penerima = FormPenerimaQurban::find($penerima);
        $cookie = cookie('dw-afiliasi', json_encode($code), 2880);
        return redirect(route('front.show_penerima', $penerima->slug))->cookie($cookie);
    }

    public function referalPenyuplai($user, $penyuplai)
    {
        $code = $user . '-' . $penyuplai;
        $penyuplai = FormPenyuplaiQurban::find($penyuplai);
        $cookie = cookie('dw-afiliasi', json_encode($code), 2880);
        return redirect(route('front.show_penyuplai', $penyuplai->slug))->cookie($cookie);
    }

    public function listCommission()
    {
        $user = auth()->guard('customer')->user();
        $orders = Order::where('ref', $user->id)->where('status', 4)->paginate(10);
        return view('ecommerce.affiliate', compact('orders'));
    }
}