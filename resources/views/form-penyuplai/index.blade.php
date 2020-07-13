@extends('layouts.admin')

@section('title')
    <title>List Penyuplai</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Penyuplai</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                List Post Qurban
                                <div class="float-right">
                                    <a href="{{ route('form-penyuplai.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                                </div>
                            </h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Penyuplai</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($penyuplai as $row)
                                        <tr>
                                            <td>
                                                <strong>{{ $row->name }}</strong><br>
                                            </td>
                                            <td>   
                                                <label>jumlah sapi :{{ $row->jumlah_sapi }}</label><br>
                                                <label>jumlah kambing :{{ $row->jumlah_kambing }}</label><br>
                                                <label>jumlah kerbau :{{ $row->jumlah_kerbau }}</label><br>
                                            </td>
                                            <td>{{ $row->created_at->format('d-m-Y') }}</td>
                                            <td>{!! $row->status_label !!}</td>
                                            <td>
                                                <form action="{{ route('form-penyuplai.destroy', $row->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('form-penyuplai.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                    @if (Auth::user()->is_admin == 1)
                                                        <a href="https://api.whatsapp.com/send?phone=62{{ substr($row->no_wa, 1) }}&text=Assalamualaikum," class="btn btn-success btn-sm">Chat Wa</a>
                                                    @else
                                                        
                                                    @endif
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
                            {!! $penyuplai->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection