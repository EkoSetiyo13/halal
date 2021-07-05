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
        
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name . 'A') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);

            $file = $request->file('image2');
            $filename2 = time() . Str::slug($request->name . 'B') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename2);

            $file = $request->file('image3');
            $filename3 = time() . Str::slug($request->name .'C') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename3);
            

            $penyuplai = FormPenyuplaiQurban::create([
                'name' => $request->name,
                'slug' => $request->name,
                'description' => $request->description,
                'image' => $filename,
                'image2' => $filename2,
                'image3' => $filename3,
                'jumlah_sapi' => $request->jumlah_sapi,
                'jumlah_kambing' => $request->jumlah_kambing,
                'jumlah_kerbau' => $request->jumlah_lain,
                'jumlah_lain' => $request->jumlah_lain,
                'user_id' => $request->user_id,
                'status' => $request->status,
                'alamat' => $request->alamat,
                'no_wa' => $request->no_wa,
                'map_alamat' => $request->map_alamat,
                'pengiriman' => implode(",", $request->pengiriman),
                'is_pelapor' => $request->is_pelapor,
            ]);
            return redirect(route('form-penyuplai.index'))->with(['success' => 'Produk Baru Ditambahkan']);
    }

    public function edit($id)
    {
        $penyuplai = FormPenyuplaiQurban::find($id);
        return view('form-penyuplai.edit', compact('penyuplai'));
    }

    public function update(Request $request, $id)
    {

        $penyuplai = FormPenyuplaiQurban::find($id);
        $filename = $penyuplai->image;
        $filename2 = $penyuplai->image2;
        $filename3 = $penyuplai->image3;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name .  'A') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            File::delete(storage_path('app/public/products/' . $penyuplai->image));
        }
        
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filename2 = time() . Str::slug($request->name . 'B') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename2);
            File::delete(storage_path('app/public/products/' . $penyuplai->image2));
        }

        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $filename3 = time() . Str::slug($request->name .'C') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename3);
            File::delete(storage_path('app/public/products/' . $penyuplai->image3));
        }

        $penyuplai->update([
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'image' => $filename,
            'image2' => $filename2,
            'image3' => $filename3,
            'jumlah_sapi' => $request->jumlah_sapi,
            'jumlah_kambing' => $request->jumlah_kambing,
            'jumlah_kerbau' => $request->jumlah_kerbau,
            'jumlah_lain' => $request->jumlah_lain,
            'user_id' => $request->user_id,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'no_wa' => $request->no_wa,
            'map_alamat' => $request->map_alamat,
            'pengiriman' => implode(",", $request->pengiriman),
            'is_pelapor' => $request->is_pelapor,
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
