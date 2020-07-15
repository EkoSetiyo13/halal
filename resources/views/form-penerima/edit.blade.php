@extends('layouts.admin')

@section('title')
    <title>Edit Produk</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Penerima</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('form-penerima.update', $penerima->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Penerima</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Penerima</label>
                                    <input type="text" name="name" class="form-control" value="{{ $penerima->name }}" required>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="no_wa">No Whatsapp (contoh : 085xxxxxxxxx)</label>
                                    <input type="text" id="int5" name="no_wa" class="form-control" value="{{ $penerima->no_wa }}" required>
                                    <p class="text-danger">{{ $errors->first('no_wa') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ $penerima->status == '1' ? 'selected':'' }}>Publish</option>
                                        <option value="0" {{ $penerima->status == '0' ? 'selected':'' }}>Draft</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ $penerima->alamat }}" required>
                                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" class="form-control">{{ $penerima->description }}</textarea>
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="jumlah_warga">Jumlah Warga Berhak</label>
                                    <input type="text" id="int" name="jumlah_warga" class="form-control" value="{{ $penerima->jumlah_warga }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_warga') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_sapi">Jumlah Hewan Sapi</label>
                                    <input type="text" id="int" name="jumlah_sapi" class="form-control" value="{{ $penerima->jumlah_sapi }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_sapi') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_kambing">Jumlah Hewan Kambing</label>
                                    <input type="text" id="int1" name="jumlah_kambing" class="form-control" value="{{ $penerima->jumlah_kambing }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_kambing') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_kerbau">Jumlah Hewan Kerbau</label>
                                    <input type="text" id="int2" name="jumlah_kerbau" class="form-control" value="{{ $penerima->jumlah_kerbau }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_kerbau') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_lain">Jumlah Hewan Lainnya</label>
                                    <input type="text" id="int3" name="jumlah_lain" class="form-control" value="{{ $penerima->jumlah_lain }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_lain') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto Produk</label>
                                    <br>
                                    <img src="{{ asset('storage/products/' . $penerima->image) }}" width="100px" height="100px" alt="{{ $penerima->name }}">
                                    <hr>
                                    <input type="file" name="image" class="form-control">
                                    <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="is_pelapor">Apakah Anda Instansi yang memposting ini?</label>
                                    <select name="is_pelapor" class="form-control" required>
                                        <option value="1" {{ $penerima->is_pelapor == '1' ? 'selected':'' }}>Ya</option>
                                        <option value="0" {{ $penerima->is_pelapor == '0' ? 'selected':'' }}>Tidak</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('is_pelapor') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Update</button>
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