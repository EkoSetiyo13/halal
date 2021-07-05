@extends('layouts.admin')

@section('title')
    <title>Edit Produk</title>
@endsection

@section('content')

@php
  $values = explode(",", $penyuplai->pengiriman);
@endphp


<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Product</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form action="{{ route('form-penyuplai.update', $penyuplai->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Penyuplai</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Penyuplai</label>
                                    <input type="text" name="name" class="form-control" value="{{ $penyuplai->name }}" required>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="no_wa">No Whatsapp (contoh : 085xxxxxxxxx)</label>
                                    <input type="text" id="int5" name="no_wa" class="form-control" value="{{ $penyuplai->no_wa }}" required>
                                    <p class="text-danger">{{ $errors->first('no_wa') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ $penyuplai->status == '1' ? 'selected':'' }}>Publish</option>
                                        <option value="0" {{ $penyuplai->status == '0' ? 'selected':'' }}>Draft</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('status') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ $penyuplai->alamat }}" required>
                                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" placeholder="informasi mengenai deskripsi yang menarik" id="description" class="form-control">{{$penyuplai->description }}</textarea>
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label class="form-control-label" for="validationCustom02">
                                      Cara pengiriman yang disediakan 
                                      </label>
                
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" name="pengiriman[]" value="bebas ongkir dalam kota radius 5KM" id="customCheck1" type="checkbox" @if(in_array("bebas ongkir dalam kota radius 5KM", $values)) checked @endif>
                                            <label class="custom-control-label" for="customCheck1">bebas ongkir dalam kota radius 5KM</label>
                                          </div>
                                          <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" name="pengiriman[]" value="bebas ongkir dalam kota" id="customCheck2" type="checkbox" @if(in_array("bebas ongkir dalam kota", $values)) checked @endif>
                                            <label class="custom-control-label" for="customCheck2">bebas ongkir dalam kota</label>
                                          </div>
                                          <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" name="pengiriman[]" value="bayar ongkir dalam kota" id="customCheck3" type="checkbox" @if(in_array("bayar ongkir dalam kota", $values)) checked @endif>
                                            <label class="custom-control-label" for="customCheck3">bayar ongkir dalam kota </label>
                                          </div>
                                          <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" name="pengiriman[]" value="siap kirim luar kota dengan ongkos kirim" id="customCheck5" type="checkbox" @if(in_array("siap kirim luar kota dengan ongkos kirim", $values)) checked @endif>
                                            <label class="custom-control-label" for="customCheck4">siap kirim luar kota dengan ongkos kirim</label>
                                          </div>
                                          <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" name="pengiriman[]" value="bisa diambil sendiri" id="customCheck5" type="checkbox" @if(in_array("bisa diambil sendiri", $values)) checked @endif>
                                            <label class="custom-control-label" for="customCheck5">bisa diambil sendiri</label>
                                          </div>
           
                                      </div>
            
                                     </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="jumlah_sapi">Jumlah Hewan Sapi</label>
                                    <input type="text" id="int" name="jumlah_sapi" class="form-control" value="{{ $penyuplai->jumlah_sapi }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_sapi') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_kambing">Jumlah Hewan Kambing</label>
                                    <input type="text" id="int1" name="jumlah_kambing" class="form-control" value="{{ $penyuplai->jumlah_kambing }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_kambing') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_kerbau">Jumlah Hewan Kerbau</label>
                                    <input type="text" id="int2" name="jumlah_kerbau" class="form-control" value="{{ $penyuplai->jumlah_kerbau }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_kerbau') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_lain">Jumlah Hewan Lainnya</label>
                                    <input type="text" id="int3" name="jumlah_lain" class="form-control" value="{{ $penyuplai->jumlah_lain }}" required>
                                    <p class="text-danger">{{ $errors->first('jumlah_lain') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto Produk</label>
                                    <br>
                                    <img src="{{ asset('storage/products/' . $penyuplai->image) }}" width="100px" height="100px" alt="{{ $penyuplai->name }}">
                                    <hr>
                                    <input type="file" name="image" class="form-control">
                                    <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Foto Produk</label>
                                    <br>
                                    <img src="{{ asset('storage/products/' . $penyuplai->image2) }}" width="100px" height="100px" alt="{{ $penyuplai->name }}">
                                    <hr>
                                    <input type="file" name="image2" class="form-control">
                                    <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                </div>
                                <div class="form-group">
                                    <label>Foto Produk</label>
                                    <br>
                                    <img src="{{ asset('storage/products/' . $penyuplai->image3) }}" width="100px" height="100px" alt="{{ $penyuplai->name }}">
                                    <hr>
                                    <input type="file" name="image3" class="form-control">
                                    <p><strong>Biarkan kosong jika tidak ingin mengganti gambar</strong></p>
                                </div>
                                <div class="form-group">
                                    <label for="is_pelapor">Apakah Anda Instansi yang memposting ini?</label>
                                    <select name="is_pelapor" class="form-control" required>
                                        <option value="1" {{ $penyuplai->is_pelapor == '1' ? 'selected':'' }}>Ya</option>
                                        <option value="0" {{ $penyuplai->is_pelapor == '0' ? 'selected':'' }}>Tidak</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('is_pelapor') }}</p>
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