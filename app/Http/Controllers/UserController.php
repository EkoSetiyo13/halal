<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        return redirect(route('user.index'))->with(['success' => 'User Baru Ditambahkan!']);
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
            'password' => Hash::make($request->password),
            'email' => $request->email,
        ]);
        return redirect(route('user.index'))->with(['success' => 'User Diperbaharui!']);
    }

    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect(route('user.index'))->with(['success' => 'User Dihapus!']);
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('users.profile')->withUser($user);
    }
}
