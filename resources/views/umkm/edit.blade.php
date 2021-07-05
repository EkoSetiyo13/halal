@extends('layouts.admin')

@section('title')
    <title>Edit Produk</title>
@endsection

@section('content')

@php
  $values = explode(",", "hallo");
@endphp


<main class="main">
    <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Product</li> --}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('umkm.update', $umkm->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Informasi UMKM</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="1">No UMKM</label>
                                    <input type="text" name="no_umkm" class="form-control" value="{{ $umkm->no_umkm }}" required>
                                    <p class="text-danger">{{ $errors->first('1') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="12">Nama UMKM</label>
                                    <input type="text" name="nama_umkm" class="form-control" value="{{ $umkm->nama_umkm }}" required>
                                    <p class="text-danger">{{ $errors->first('12') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="2">Nama Pemilik</label>
                                    <input type="text" name="nama_pemilik" class="form-control" value="{{ $umkm->nama_pemilik }}" required>
                                    <p class="text-danger">{{ $errors->first('2') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="3">Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control" value="{{ $umkm->nama_produk }}" required>
                                    <p class="text-danger">{{ $errors->first('3') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ $umkm->status == '1' ? 'selected':'' }}>Aktif</option>
                                        <option value="0" {{ $umkm->status == '0' ? 'selected':'' }}>Tidak Aktif</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Tipe Binaan :</label>
                                    <select name="tipe_binaan" class="form-control" required>
                                        <option value="A" {{ $umkm->tipe_binaan == 'A' ? 'selected':'' }}>A</option>
                                        <option value="B" {{ $umkm->tipe_binaan == 'B' ? 'selected':'' }}>B</option>
                                        <option value="C" {{ $umkm->tipe_binaan == 'C' ? 'selected':'' }}>C</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('4') }}</p>
                                </div>                                
                            </div>

                            <div class="card-header">
                                <h4 class="card-title text-center">Alamat UMKM</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ $umkm->alamat }}" required>
                                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="desa">Desa 
                                        <input type="text" name="desa" class="form-control" value="{{ $umkm->desa }}" required>
                                    </label>
                                    
                                    <label for="kecamatan">Kecamatan
                                        <input type="text" name="kecamatan" class="form-control" value="{{ $umkm->kecamatan }}" required>
                                    </label>

                                    <label for="kota">Kab/Kota
                                        <input type="text" name="kota" class="form-control" value="{{ $umkm->kota }}" required>
                                    </label>
                                    
                                </div>                              
                            </div>

                            <div class="card-header">
                                <h4 class="card-title text-center">Kontak dan Media Sosial UMKM</h4>
                            </div>
                            <div class="card-body">
                                
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                      <label class="form-control-label" >Nomer Whatsapp</label>
                                      <input type="text" name="no_wa" class="form-control"  value="{{ $umkm->no_wa }}" required>
                                      
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="form-control-label" >Email</label>
                                      <input type="text" name="email" class="form-control"  value="{{ $umkm->email }}" required>
                                      
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="form-control-label" >Instagram</label>
                                      <input type="text" name="instagram" class="form-control"  value="{{ $umkm->instagram }}" required>
                                      
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-control-label" >Facebook</label>
                                        <input type="text" name="facebook" class="form-control"  value="{{ $umkm->facebook }}" required>
                                        
                                    </div>
                                </div>                              
                            </div>
                            <div class="card-body">                               
                                <div class="form-group">
                                    <h4 class="card-title text-center">Foto Produk</h4>
                                    <br>
                                    <img src="{{ asset('storage/products/' . $umkm->image) }}" width="300px" height="300px" alt="{{ $umkm->nama_pemilik }}">
                                    <hr>
                                    <input type="file" name="image" class="form-control">
                                    <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                </div>
                            </div>
                            <div class="card-body">                               
                                <div class="form-group">
                                    <button class="btn btn-primary btn-xl">Simpan</button>
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