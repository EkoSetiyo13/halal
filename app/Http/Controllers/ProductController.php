<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\Category;
use App\JenisTernak;
use File;
use Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->id == 1) {
            $product = Product::with(['category', 'jenisternak'])->orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $product = $product->where('name', 'LIKE', '%' . request()->q . '%');
            }
        } else {
            $product = Product::where('user_id', '=', Auth::user()->id)->with(['category', 'jenisternak'])->orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $product = $product->where('name', 'LIKE', '%' . request()->q . '%');
            }
        }
        
        $product = $product->paginate(10);
        return view('products.index', compact('product'));
    }

    public function create()
    {
        $category = Category::orderBy('name', 'DESC')->get();
        $jenisTernak = JenisTernak::orderBy('name', 'DESC')->get();
        return view('products.create', compact('category', 'jenisTernak'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'jenis_ternak_id' => 'required',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'user_id' => 'required|integer',
            'image' => 'required|image|mimes:png,jpeg,jpg',
            'pembayaran' => 'required|string',
            'pengiriman' => 'required|string',
            'lokasi' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);

            $product = Product::create([
                'name' => $request->name,
                'slug' => $request->name,
                'category_id' => $request->category_id,
                'jenis_ternak_id' => $request->jenis_ternak_id,
                'description' => $request->description,
                'image' => $filename,
                'price' => $request->price,
                'weight' => $request->weight,
                'user_id' => $request->user_id,
                'status' => $request->status,
                'pengiriman' => $request->pengiriman,
                'pembayaran' => $request->pembayaran,
                'lokasi' => $request->lokasi
            ]);
            return redirect(route('product.index'))->with(['success' => 'Produk Baru Ditambahkan']);
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::orderBy('name', 'DESC')->get();
        return view('products.edit', compact('product', 'category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'jenis_ternak_id' => 'required',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
            'pembayaran' => 'required|string',
            'pengiriman' => 'required|string',
            'lokasi' => 'required|string',
        ]);

        $product = Product::find($id);
        $filename = $product->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            File::delete(storage_path('app/public/products/' . $product->image));
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'jenis_ternak_id' => $request->jenis_ternak_id,
            'price' => $request->price,
            'weight' => $request->weight,
            'image' => $filename,
            'status' => $request->status,
            'pengiriman' => $request->pengiriman,
            'pembayaran' => $request->pembayaran,
            'lokasi' => $request->lokasi
        ]);
        return redirect(route('product.index'))->with(['success' => 'Data Produk Diperbaharui']);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        File::delete(storage_path('app/public/products/' . $product->image));
        $product->delete();
        return redirect(route('product.index'))->with(['success' => 'Produk Sudah Dihapus']);
    }

    
}
