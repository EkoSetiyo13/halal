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
            <form action="{{ route('umkm.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Penyuplai</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="1">No UMKM</label>
                                    <input type="text" name="no_umkm" class="form-control" value="{{ old('no_umkm') }}" required>
                                    <p class="text-danger">{{ $errors->first('1') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="12">Nama UMKM</label>
                                    <input type="text" name="nama_umkm" class="form-control" value="{{ old('nama_umkm') }}" required>
                                    <p class="text-danger">{{ $errors->first('12') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="2">Nama Pemilik</label>
                                    <input type="text" name="nama_pemilik" class="form-control" value="{{ old('nama_pemilik') }}" required>
                                    <p class="text-danger">{{ $errors->first('2') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="3">Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') }}" required>
                                    <p class="text-danger">{{ $errors->first('3') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ old('status') == '1' ? 'selected':'' }}>Aktif</option>
                                        <option value="0" {{ old('status') == '0' ? 'selected':'' }}>Tidak Aktif</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Tipe Binaan :</label>
                                    <select name="tipe_binaan" class="form-control" required>
                                        <option value="A" {{ old('tipe_binaan') == 'A' ? 'selected':'' }}>A</option>
                                        <option value="B" {{ old('tipe_binaan') == 'B' ? 'selected':'' }}>B</option>
                                        <option value="C" {{ old('tipe_binaan') == 'C' ? 'selected':'' }}>C</option>
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
                                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="desa">Desa 
                                        <input type="text" name="desa" class="form-control" value="{{ old('desa') }}" required>
                                    </label>
                                    
                                    <label for="kecamatan">Kecamatan
                                        <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan') }}" required>
                                    </label>

                                    <label for="kota">Kab/Kota
                                        <input type="text" name="kota" class="form-control" value="{{ old('kota') }}" required>
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
                                      <input type="text" name="no_wa" class="form-control"  value="{{ old('no_wa') }}" required>
                                      
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="form-control-label" >Email</label>
                                      <input type="text" name="email" class="form-control"  value="{{ old('email') }}" required>
                                      
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="form-control-label" >Instagram</label>
                                      <input type="text" name="instagram" class="form-control"  value="{{ old('instagram') }}" required>
                                      
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-control-label" >Facebook</label>
                                        <input type="text" name="facebook" class="form-control"  value="{{ old('facebook') }}" required>
                                        
                                    </div>
                                </div>                              
                            </div>

                            <div class="card-body">                               
                                <div class="form-group">
                                    <label for="image">Foto</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">
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