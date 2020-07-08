<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\FormPenyuplaiQurban;
use App\JenisTernak;
use File;
use Auth;

class FormPenyuplaiQurbanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->id == 1) {
            $penyuplai = FormPenyuplaiQurban::orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $penyuplai = $penyuplai->where('name', 'LIKE', '%' . request()->q . '%');
            }
        } else {
            $penyuplai = FormPenyuplaiQurban::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $penyuplai = $penyuplai->where('name', 'LIKE', '%' . request()->q . '%');
            }
        }
        
        $penyuplai = $penyuplai->paginate(10);
        return view('form-penyuplai.index', compact('penyuplai'));
    }

    public function create()
    {
        
        return view('form-penyuplai.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'required',
            'jumlah_sapi' => 'required|integer',
            'jumlah_kambing' => 'required|integer',
            'jumlah_kerbau' => 'required|integer',
            'jumlah_lain' => 'required|integer',
            'user_id' => 'required|integer',
            'image' => 'required|image|mimes:png,jpeg,jpg',
            'pembayaran' => 'required|string',
            'pengiriman' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);

            $penyuplai = FormPenyuplaiQurban::create([
                'name' => $request->name,
                'slug' => $request->name,
                'description' => $request->description,
                'image' => $filename,
                'jumlah_sapi' => $request->jumlah_sapi,
                'jumlah_kambing' => $request->jumlah_kambing,
                'jumlah_kerbau' => $request->jumlah_lain,
                'jumlah_lain' => $request->jumlah_lain,
                'user_id' => $request->user_id,
                'status' => $request->status,
                'pengiriman' => $request->pengiriman,
                'pembayaran' => $request->pembayaran,
                'alamat' => $request->alamat,
                'map_alamat' => $request->map_alamat,
            ]);
            return redirect(route('form-penyuplai.index'))->with(['success' => 'Produk Baru Ditambahkan']);
        }
    }

    public function edit($id)
    {
        $penyuplai = FormPenyuplaiQurban::find($id);
        return view('form-penyuplai.edit', compact('penyuplai'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'required',
            'jumlah_sapi' => 'required|integer',
            'jumlah_kambing' => 'required|integer',
            'jumlah_kerbau' => 'required|integer',
            'jumlah_lain' => 'required|integer',
            'user_id' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
            'pembayaran' => 'required|string',
            'pengiriman' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $penyuplai = FormPenyuplaiQurban::find($id);
        $filename = $penyuplai->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            File::delete(storage_path('app/public/products/' . $penyuplai->image));
        }

        $penyuplai->update([
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'image' => $filename,
            'jumlah_sapi' => $request->jumlah_sapi,
            'jumlah_kambing' => $request->jumlah_kambing,
            'jumlah_kerbau' => $request->jumlah_kerbau,
            'jumlah_lain' => $request->jumlah_lain,
            'user_id' => $request->user_id,
            'status' => $request->status,
            'pengiriman' => $request->pengiriman,
            'pembayaran' => $request->pembayaran,
            'alamat' => $request->alamat,
            'map_alamat' => $request->map_alamat,
        ]);
        return redirect(route('form-penyuplai.index'))->with(['success' => 'Data Produk Diperbaharui']);
    }

    public function destroy($id)
    {
        $penyuplai = FormPenyuplaiQurban::find($id);
        File::delete(storage_path('app/public/products/' . $penyuplai->image));
        $penyuplai->delete();
        return redirect(route('form-penyuplai.index'))->with(['success' => 'Produk Sudah Dihapus']);
    }
}
