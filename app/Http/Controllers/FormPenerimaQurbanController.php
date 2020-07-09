<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\FormPenerimaQurban;
use App\Category;
use App\JenisTernak;
use File;
use Auth;

class FormPenerimaQurbanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function index()
    {
        if (Auth::user()->id == 1) {
            $penerima = FormPenerimaQurban::orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $penerima = $penerima->where('name', 'LIKE', '%' . request()->q . '%');
            }
        } else {
            $penerima = FormPenerimaQurban::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $penerima = $penerima->where('name', 'LIKE', '%' . request()->q . '%');
            }
        }
        
        $penerima = $penerima->paginate(10);
        return view('form-penerima.index', compact('penerima'));
    }

    public function create()
    {
        return view('form-penerima.create');
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
            'no_wa' => 'required|integer',
            'image' => 'required|image|mimes:png,jpeg,jpg',
            'alamat' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);

            $penerima = FormPenerimaQurban::create([
                'name' => $request->name,
                'slug' => $request->name,
                'description' => $request->description,
                'image' => $filename,
                'jumlah_sapi' => $request->jumlah_sapi,
                'jumlah_kambing' => $request->jumlah_kambing,
                'jumlah_kerbau' => $request->jumlah_kerbau,
                'jumlah_lain' => $request->jumlah_lain,
                'jumlah_warga' => $request->jumlah_warga,
                'user_id' => $request->user_id,
                'status' => $request->status,
                'alamat' => $request->alamat,
                'map_alamat' => $request->map_alamat,
                'no_wa' => $request->no_wa
            ]);
            return redirect(route('form-penerima.index'))->with(['success' => 'Produk Baru Ditambahkan']);
        }
    }

    public function edit($id)
    {
        $penerima = FormPenerimaQurban::find($id);
        return view('form-penerima.edit', compact('penerima'));
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
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
            'alamat' => 'required|string',
            'no_wa' => 'required|integer',
        ]);

        $penerima = FormPenerimaQurban::find($id);
        $filename = $penerima->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            File::delete(storage_path('app/public/products/' . $penerima->image));
        }

        $penerima->update([
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'image' => $filename,
            'jumlah_sapi' => $request->jumlah_sapi,
            'jumlah_kambing' => $request->jumlah_kambing,
            'jumlah_kerbau' => $request->jumlah_kerbau,
            'jumlah_lain' => $request->jumlah_lain,
            'jumlah_warga' => $request->jumlah_warga,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'map_alamat' => $request->map_alamat,
            'no_wa' => $request->no_wa
        ]);
        return redirect(route('form-penerima.index'))->with(['success' => 'Data Produk Diperbaharui']);
    }

    public function destroy($id)
    {
        $penerima = FormPenerimaQurban::find($id);
        File::delete(storage_path('app/public/products/' . $penerima->image));
        $penerima->delete();
        return redirect(route('form-penerima.index'))->with(['success' => 'Produk Sudah Dihapus']);
    }

}
