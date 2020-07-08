<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('is_admin', '=', false)->orderBy('created_at', 'DESC')->paginate(10);
        return view('users.index', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:categories'
        ]);

        $request->request->add(['slug' => $request->name]);
        User::create($request->except('_token'));
        return redirect(route('user.index'))->with(['success' => 'Kategori Baru Ditambahkan!']);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:categories,name,' . $id
        ]);

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
        ]);
        return redirect(route('user.index'))->with(['success' => 'Kategori Diperbaharui!']);
    }

    public function destroy($id)
    {
        $user = user::withCount(['child', 'product'])->find($id);
        if ($user->child_count == 0 && $user->product_count == 0) {
            $user->delete();
            return redirect(route('user.index'))->with(['success' => 'Kategori Dihapus!']);
        }
        return redirect(route('user.index'))->with(['error' => 'Kategori Ini Memiliki Anak Kategori!']);
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('users.profile')->withUser($user);
    }
}
