@extends('layouts.admin')

@section('title')
    <title>Tambah Produk</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Penyuplai</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Penyuplai</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Judul Post</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
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
                                    <input type="text" name="alamat" class="form-control" value="{{ old('link') }}" required>
                                    <p class="text-danger">{{ $errors->first('link') }}</p>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" placeholder="informasi mengenai deskripsi yang menarik" class="form-control">{{ old('description') }}</textarea>
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <select name="position" class="form-control" required>
                                        <option value="1" {{ old('position') == '1' ? 'selected':'' }}>1</option>
                                        <option value="2" {{ old('position') == '0' ? 'selected':'' }}>2</option>
                                        <option value="3" {{ old('position') == '0' ? 'selected':'' }}>3</option>
                                        <option value="4" {{ old('position') == '0' ? 'selected':'' }}>4</option>
                                        <option value="5" {{ old('position') == '0' ? 'selected':'' }}>5</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}" required>
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