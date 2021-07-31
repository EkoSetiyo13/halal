<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

use App\Umkm;
use App\JenisTernak;
use App\Imports\UmkmsImport;
use App\Exports\UmkmsExport;


class UmkmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $umkms = Umkm::orderBy('id', 'ASC')->get();
        return view('umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('umkm.create');
    }

    public function store(Request $request)
    {       

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . Str::slug($request->nama_pemilik) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/products', $filename);
            }

            $penyuplai = Umkm::create([
                'no_umkm' => $request->no_umkm, 
                'nama_pemilik' => $request->nama_pemilik,
                'nama_umkm' => $request->nama_umkm, 
                'nama_produk' => $request->nama_produk, 
                'tipe_binaan' => $request->tipe_binaan,
                'alamat' => $request->alamat, 
                'desa' => $request->desa, 
                'kecamatan' => $request->kecamatan,
                'kota' => $request->kota, 
                'no_wa' => $request->no_wa,  
                'email' => $request->email,
                'instagram' => $request->instagram, 
                'facebook' => $request->facebook,
                'status' => $request->status,
                'image' => $filename,
            ]);
            return redirect(route('umkm.index'))->with(['success' => 'Produk Baru Ditambahkan']);
    }

    public function edit($id)
    {
        $umkm = Umkm::find($id);
        return view('umkm.edit', compact('umkm'));
    }

    public function update(Request $request, $id)
    {

        $umkm = Umkm::find($id);

        $filename = $umkm->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->nama_pemilik) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            File::delete(storage_path('app/public/products/' . $umkm->image));
        }
        
        $umkm->update([
            'no_umkm' => $request->no_umkm, 
            'nama_pemilik' => $request->nama_pemilik,
            'nama_umkm' => $request->nama_umkm, 
            'nama_produk' => $request->nama_produk, 
            'tipe_binaan' => $request->tipe_binaan,
            'alamat' => $request->alamat, 
            'desa' => $request->desa, 
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota, 
            'no_wa' => $request->no_wa,  
            'email' => $request->email,
            'instagram' => $request->instagram, 
            'facebook' => $request->facebook,
            'status' => $request->status,
            'image' => $filename,
        ]);
        return redirect(route('umkm.index'))->with(['success' => 'Data Produk Diperbaharui']);
    }

    public function destroy($id)
    {
        $umkm = Umkm::find($id);
        $umkm->delete();
        return redirect(route('umkm.index'))->with(['success' => 'Produk Sudah Dihapus']);
    }

    public function kader()
    {
        $umkms = Umkm::Where('nama_umkm', '=', '-')->orderBy('id', 'ASC')->get();
        //return response()->json($umkms);
        return view('umkm.kader', compact('umkms'));
    }

    public function umkm()
    {
        $umkms = Umkm::Where('status', '=', true)->Where('nama_umkm', '!=', '-')->orderBy('id', 'ASC')->get();
        return view('umkm.umkm', compact('umkms'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_file = $file->hashName();
        $path = $file->storeAs('public/excel/',$nama_file);
        $import = Excel::import(new UmkmsImport(), storage_path('app/public/excel/'.$nama_file));
        Storage::delete($path);

        //return response()->json($import);

        if($import) {
            //redirect
            return redirect()->route('users.index')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('users.index')->with(['error' => 'Data Gagal Diimport!']);
        }
    }

    public function export()
    {
        return Excel::download(new UmkmsExport(), 'users.xlsx');
    }
}
