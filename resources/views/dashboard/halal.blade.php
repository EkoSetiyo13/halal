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
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Halal</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Resume Halal</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Jumlah UMKM</small>
                                        <br>
                                        <strong class="h4"> {{$total_umkm}} </strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Jumlah UMKM Aktif</small>
                                        <br>
                                        <strong class="h4"> {{$total_umkm_aktif}} </strong>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="callout callout-primary">
                                        <small class="text-muted">Jumlah Kader</small>
                                        <br>
                                        <strong class="h4"> {{$total_kader}} </strong>
                                    </div>
                                </div>
                                {{-- <div class="col-md-3">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Jumlah Penyuplai Aktif</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
</main>
@endsection