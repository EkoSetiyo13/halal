@extends('layouts.ecommerce')

@section('title')
    <title>Halal ITS</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">
                    <h2>Cara Pendafataran</h2>
                </div>
            </div>
            <div class="row ">       
                <div class="jumbotron">
                    {{-- <h1 class="display-4">Selamat Datang Semua</h1> --}}
                    <p class="lead"> <b> Penyuplai </b> adalah seseorang atau sekelompok orang yang menjual hewan qurban dengan semua jenis sesuai dengan syariat</p>
                    <p class="lead"> <b> Penerima </b> adalah sekelompok atau instansi yang membutuhkan hewan qurban namun belum memenuhi jumlah warga yang menerima</p>
                    <hr class="my-4">
                    <h4>Cara Pendaftaran Penyuplai</h4>
                    <p>Opsi 1 : lakukan registrasi dan isi dashboard sesuai dengan field yang disediakan</p>
                    <p>Opsi 2 : hubungi admin melaluai admin untuk mendaftar dan mengupdate kondisi sesuai format yang disediakan</p>
                    <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=62{{ $admin1 }}&text=Assalamualaikum," role="button">Chat Admin</a>
                    <hr class="my-4">
                    <h4>Cara Pendaftaran Penerima</h4>
                    <p>Opsi 1 : lakukan registrasi dan isi dashboard sesuai dengan field yang disediakan</p>
                    <p>Opsi 2 : hubungi admin melaluai admin untuk mendaftar dan mengupdate kondisi sesuai format yang disediakan</p>
                    <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=62{{ $admin2 }}&text=Assalamualaikum," role="button">Chat Admin</a>
                  </div>       
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection