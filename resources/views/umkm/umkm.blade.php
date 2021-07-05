@extends('layouts.admin')

@section('title')
    <title>Daftar UMKM Binaan Halal</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item">UMKM</li>
        <li class="breadcrumb-item active">Daftar</li> --}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="card-title">
                                Data UMKM
                                {{-- <div class="float-right">
                                    <a href="{{ route('umkm.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                                </div> --}}
                            </h4>
                        </div>
                        {{-- <div class="card-header">
                          <div class="button-action" style="margin-bottom: 20px">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                                IMPORT
                            </button>
                            <a href="{{ route('users.export') }}" class="btn btn-primary btn-md">EXPORT</a>
                        </div>
                        </div> --}}
                        @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                        @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="table-responsive py-4">
                          <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                              <tr>
                                <th>Nomer Binaan</th>
                                <th scope="col">Nama UKM</th>
                                {{-- <th scope="col">Nama Produk</th> --}}
                                <th>Status</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th></th>
                                <th scope="col"></th>
                                {{-- <th scope="col"></th> --}}
                                <th></th>
                                <th></th>
                              </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($umkms as $umkm)
                                <tr>
                                    <td>
                                        <strong>{{ $umkm->no_umkm }}</strong><br>
                                    </td>
                                    <td>{{ $umkm->nama_umkm }}</td>
                                    {{-- <td>{{ $umkm->nama_produk }}</td> --}}
                                    <td>{!! $umkm->status_label !!}</td>
                                    <td>
                                        <form action="{{ route('umkm.destroy', $umkm->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                            {{-- @if (Auth::user()->is_admin == 1)
                                                <a href="https://api.whatsapp.com/send?phone=62{{ substr($umkm->no_wa, 1) }}&text=Assalamualaikum," class="btn btn-success btn-sm">Chat Wa</a>
                                            @else
                                                
                                            @endif --}}
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>

                    {{-- <div class="container" style="margin-top: 80px">
                        <div class="row">
                            <div class="col-md-12">
                                @if($message = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ $message }}
                                    </div>
                                @elseif($message =  Session::get('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-header">
                                        DATA USERS
                                    </div>
                                    <div class="card-body">
                                        <div class="button-action" style="margin-bottom: 20px">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                                                IMPORT
                                            </button>
                                            <a href="{{ route('users.export') }}" class="btn btn-primary btn-md">EXPORT</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">NAMA LENGKAP</th>
                                                    <th scope="col">ALAMAT EMAIL</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- modal -->
                    <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">IMPORT DATA</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>PILIH FILE</label>
                                            <input type="file" name="file" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                                        <button type="submit" class="btn btn-success">IMPORT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection