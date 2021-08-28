<?php

namespace App\Http\Controllers\Halal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Umkm;
use App\Imports\UmkmsImport;
use App\Exports\UmkmsExport;
use Auth;
use App\Http\Requests\UMKMRequest;

class BinaanController extends Controller
{
    public function dashboardMember()
    {
        return view('dashboard.member');
    }

    public function index()
    {
        $user = Auth::user();
        $umkms = Umkm::orderBy('id', 'ASC')->where('user_id', $user->id)->get();
        // return $umkms;
        return view('halal.binaan.index', compact('umkms'));
    }

    public function create()
    {
        return view('halal.binaan.create');
    }

    public function store(UMKMRequest $request)
    {
        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->nama_pemilik) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
        }

        $umkm = new Umkm;
        $umkm->fill($request->all());
        $umkm->setAttribute('image', $filename);
        $umkm->save();

        return redirect()->route('halal.binaan.index')->with(['success' => 'Produk Baru Ditambahkan']);
    }

    public function edit($id)
    {
        $umkm = Umkm::find($id);
        return view('halal.binaan.edit', compact('umkm'));
    }

    public function update(UMKMRequest $request, $id)
    {

        $umkm = Umkm::find($id);

        $filename = $umkm->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->nama_pemilik) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            File::delete(storage_path('app/public/products/' . $umkm->image));
        }

        $umkm->fill($request->all());
        $umkm->setAttribute('image', $filename);
        dd($umkm);
        $umkm->save();
        

        return redirect(route('halal.binaan.index'))->with(['success' => 'Data UMKM Diperbaharui']);
    }

    public function destroy($id)
    {
        $umkm = Umkm::find($id);
        $umkm->delete();
        return redirect(route('halal.binaan.index'))->with(['success' => 'UMKM Dihapus']);
    }
}
