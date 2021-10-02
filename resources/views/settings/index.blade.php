@extends('layouts.admin')

@section('title')
<title>List User</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">Pengaturan</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pengaturan {{$regis_active}}</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="font-size: 15px">Pengaturan</th>
                                        <th style="font-size: 15px">Status</th>
                                        <th style="font-size: 15px">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>
                                            <strong>Registrasi Binaan Halal</strong><br>
                                        </td>
                                        <td>
                                            @if ($regis_active == 1)
                                            <b style="color:green">Sedang Aktif</b>
                                            @else
                                            <b style="color:red">Sedang Dimatikan</b>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($regis_active == 1)
                                            <a href="{{ route('setting.regis-binaan') }}" class="btn btn-danger btn-sm">Matikan</a>
                                            @else
                                            <a href="{{ route('setting.regis-binaan') }}" class="btn btn-success btn-sm">Aktifkan</a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection