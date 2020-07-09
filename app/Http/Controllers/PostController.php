<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use File;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->id == 1) {
            $post = Post::orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $post = $post->where('name', 'LIKE', '%' . request()->q . '%');
            }
        } else {
            $post = Post::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'DESC');
            if (request()->q != '') {
                $post = $post->where('name', 'LIKE', '%' . request()->q . '%');
            }
        }
        
        $post = $post->paginate(10);
        return view('post.index', compact('post'));
    }

    public function create()
    {
        
        return view('post.create');
    }

    public function store(Request $request)
    {
        
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name . 'A') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            

            $post = Post::create([
                'name' => $request->name,
                'slug' => $request->name,
                'description' => $request->description,
                'image' => $filename,
                'link' => $request->link,
                'position' => $request->position,
                'status' => $request->status

            ]);
            return redirect(route('post.index'))->with(['success' => 'Produk Baru Ditambahkan']);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        $filename = $post->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name .  'A') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            File::delete(storage_path('app/public/products/' . $post->image));
        }

        $post->update([
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'image' => $filename,
            'link' => $request->link,
            'position' => $request->position,
            'status' => $request->status
        ]);
        return redirect(route('post.index'))->with(['success' => 'Data Produk Diperbaharui']);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        File::delete(storage_path('app/public/products/' . $post->image));
        $post->delete();
        return redirect(route('post.index'))->with(['success' => 'Produk Sudah Dihapus']);
    }
}
