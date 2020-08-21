@extends('halal.layouts.halal')

@section('title')
    <title>Halal ITS</title>
@endsection

@section('content')
   
	<div class="welcome-area" id="welcome" style="margin-top: 80px">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-7 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Pusat Kajian Halal</h1>
                        <p>This template is available for 100% free of charge on TemplateMo. Download, modify and use this for your business website.</p>
                        <a href="#about" class="main-button-slider">Find Out More</a>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="assets/assets/images/slider-icon.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">
                    <h2>Tampilan Semua Binaan</h2>
                </div>
            </div>
            <div class="row ">
                    
                @forelse ($umkms as $data)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <div class="item service-item" style="height: 500px">
                            {{-- <div class="icon">
                                <i><img src="assets/assets/images/service-icon-01.png" alt="" ></i>
                            </div> --}}
                            <img src="{{ asset('storage/products/' . $data->image) }}" alt="{{ $data->nama_umkm }}" class="card-img-top" style="height: 200px">
                            <h5 style="height: 100px" class="service-title"> {{$data->nama_pemilik}} </h5>
                            <p style="height: 50px">No Binaan : <b> {{$data->no_umkm}} </b> </p>
                            <a href="{{ url('/binaan/2020-' . $data->no_umkm) }}" class="main-button">Detail</a>
                        </div>
                    </div>
                    
                </div>
                    @empty
                        <div class="col-md-12">
                            <h3 class="text-center">Tidak ada produk</h3>
                        </div>
                    @endforelse    
                </div>    
                
                
                        
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection