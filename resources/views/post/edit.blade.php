@extends('layouts.admin')

@section('title')
    <title>Edit Produk</title>
@endsection

@section('content')

@php
  $values = explode(",", $post->pengiriman);
@endphp


<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Product</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Judul Post</label>
                            <input type="text" name="name" class="form-control" value="{{ $post->name }}" required>
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="1" {{ old('status') == '1' ? 'selected':'' }}>Publish</option>
                                <option value="0" {{ old('status') == '0' ? 'selected':'' }}>Draft</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('status') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="link">link</label>
                            <input type="text" name="link" class="form-control" value="{{ $post->link }}" required>
                            <p class="text-danger">{{ $errors->first('link') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" placeholder="informasi mengenai deskripsi yang menarik" class="form-control">{{ $post->description }}</textarea>
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        </div>                
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <select name="position" class="form-control" required>
                                        <option value="1" {{ old('position') == '1' ? 'selected':'' }}>1</option>
                                        <option value="2" {{ old('position') == '2' ? 'selected':'' }}>2</option>
                                        <option value="3" {{ old('position') == '3' ? 'selected':'' }}>3</option>
                                        <option value="4" {{ old('position') == '4' ? 'selected':'' }}>4</option>
                                        <option value="5" {{ old('position') == '5' ? 'selected':'' }}>5</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto Produk</label>
                                    <br>
                                    <img src="{{ asset('storage/products/' . $post->image) }}" width="100px" height="100px" alt="{{ $post->name }}">
                                    <hr>
                                    <input type="file" name="image" class="form-control">
                                    <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                </div>                             
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection