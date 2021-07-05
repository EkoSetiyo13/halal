<!-- FUNGSI EXTENDS DIGUNAKAN UNTUK ME-LOAD MASTER LAYOUTS YANG ADA, KARENA INI ADALAH HALAMAN HOME MAKA KITA ME-LOAD LAYOUTS ADMIN.BLADE.PHP -->
<!-- KETIKA MELOAD FILE BLADE, MAKA EKSTENSI .BLADE.PHP TIDAK PERLU DITULISKAN -->
@extends('layouts.admin')

<!-- TAG YANG DIAPIT OLEH SECTION('TITLE') AKAN ME-REPLACE @YIELD('TITLE') PADA MASTER LAYOUTS -->
@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li> --}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pengguna Qurban ITS</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Jumlah Penyuplai Qurban</small>
                                        <br>
                                        <strong class="h4">{{$userPenyuplai}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Jumlah Penerima Qurban</small>
                                        <br>
                                        <strong class="h4">{{$userPenerima}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-primary">
                                        <small class="text-muted">Jumlah Penyuplai Non-Aktif</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Jumlah Penyuplai Aktif</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Postingan Qurban ITS</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Jumlah Postingan Penyuplai Aktif</small>
                                        <br>
                                        <strong class="h4">{{$postinganPenyuplai}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Jumlah Postingan Penerima Aktif</small>
                                        <br>
                                        <strong class="h4">{{$postinganPenerima}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-primary">
                                        <small class="text-muted">Jumlah Postingan Penyuplai Non Aktif</small>
                                        <br>
                                        <strong class="h4">{{ $postinganPenyuplaiNonAktif}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Jumlah Postingan Penerima Aktif</small>
                                        <br>
                                        <strong class="h4">{{ $postinganPenerimaNonAktif}}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Aktifitas Qurban Admin</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Admin 1</small>
                                        <br>
                                        <strong class="h4">{{$admin1}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Admin 2</small>
                                        <br>
                                        <strong class="h4">{{$admin2}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="callout callout-primary">
                                        <small class="text-muted">Admin 3</small>
                                        <br>
                                        <strong class="h4">{{$admin3}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Admin 4</small>
                                        <br>
                                        <strong class="h4">{{$admin4}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Admin 5</small>
                                        <br>
                                        <strong class="h4">{{$admin5}}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection