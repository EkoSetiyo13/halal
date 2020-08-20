<?php

namespace App\Http\Controllers;

use App\Imports\UmkmsImport;
use App\Exports\UmkmsExport;
use App\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Str;
use App\FormPenyuplaiQurban;
use App\JenisTernak;
use File;
use Auth;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::orderBy('id', 'ASC')->get();
        return view('umkm.index', compact('umkms'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new UmkmsImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

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

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     if (Auth::user()->id == 1) {
    //         $penyuplai = FormPenyuplaiQurban::orderBy('created_at', 'DESC');
    //         if (request()->q != '') {
    //             $penyuplai = $penyuplai->where('name', 'LIKE', '%' . request()->q . '%');
    //         }
    //     } else {
    //         $penyuplai = FormPenyuplaiQurban::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'DESC');
    //         if (request()->q != '') {
    //             $penyuplai = $penyuplai->where('name', 'LIKE', '%' . request()->q . '%');
    //         }
    //     }
        
    //     $penyuplai = $penyuplai->paginate(10);
    //     return view('umkm.index', compact('penyuplai'));
    // }

    public function create()
    {
        
        return view('umkm.create');
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
        

        $umkm->update([
            'name' => $request->name,
        ]);
        return redirect(route('umkm.index'))->with(['success' => 'Data Produk Diperbaharui']);
    }

    public function destroy($id)
    {
        $umkm = Umkm::find($id);
        $umkm->delete();
        return redirect(route('umkm.index'))->with(['success' => 'Produk Sudah Dihapus']);
    }

}
