<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisTernak;

class JenisTernakController extends Controller
{
    public function index()
    {
        $jenisTernak = JenisTernak::with(['parent'])->orderBy('created_at', 'DESC')->paginate(10);
        $parent = JenisTernak::getParent()->orderBy('name', 'ASC')->get();
        return view('jenis-ternak.index', compact('jenisTernak', 'parent'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:categories'
        ]);

        $request->request->add(['slug' => $request->name]);
        JenisTernak::create($request->except('_token'));
        return redirect(route('jenis-ternak.index'))->with(['success' => 'Kategori Baru Ditambahkan!']);
    }

    public function edit($id)
    {
        $jenisTernak = JenisTernak::find($id);
        $parent = JenisTernak::getParent()->orderBy('name', 'ASC')->get();
        return view('jenis-ternak.edit', compact('jenisTernak', 'parent'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:categories,name,' . $id
        ]);

        $jenisTernak = JenisTernak::find($id);
        $jenisTernak->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);
        return redirect(route('jenis-ternak.index'))->with(['success' => 'Kategori Diperbaharui!']);
    }

    public function destroy($id)
    {
        $jenisTernak = JenisTernak::withCount(['child'])->find($id);
        if ($jenisTernak->child_count == 0) {
            $jenisTernak->delete();
            return redirect(route('jenis-ternak.index'))->with(['success' => 'Kategori Dihapus!']);
        }
        return redirect(route('jenis-ternak.index'))->with(['error' => 'Kategori Ini Memiliki Anak Kategori!']);
    }
    
}
