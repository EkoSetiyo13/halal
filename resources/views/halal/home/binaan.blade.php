@extends('halal.layouts.halal')

@section('title')
    <title>Halal ITS</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<div class="welcome-area" id="welcome" style="margin-top: 110px">

        <!-- ***** Header Text Start ***** -->
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
        <!-- ***** Header Text End ***** -->
    </div>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">
                    <h2>Tampilan Semua Penerima</h2>
                </div>
            </div>
            <div class="row ">
                    
                {{-- @forelse ($penerima as $row)
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card border-primary">
                        <img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}" class="card-img-top" style="height: 200px">
            
                        <div class="card-body">
                            <div class="card-title"><h4>
                                {{ $row->name }}
                            </h4></div>
                            <h6> alamat : {{ $row->alamat }}</h6>
                            {{ substr($row->description, -100) }}
                        </div>
            
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary">
                                <a href="https://api.whatsapp.com/send?phone=62{{ $row->no_wa }}&text=Assalamualaikum, %0ASaya%20mendapat%20kontak%20anda%20dari%20Halal%20ITS" style="color: white">Chat Wa</a>
                            </button>
                            <button type="button" class="btn btn-primary">
                                <a href="{{ url('/penerima/' . $row->slug) }}" style="color: white">detail</a>
                            </button>
                        </div>
                    </div>
                </div>
                    @empty
                        <div class="col-md-12">
                            <h3 class="text-center">Tidak ada produk</h3>
                        </div>
                    @endforelse    
                </div>  --}}
               
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <div class="item service-item">
                            <div class="icon">
                                <i><img src="assets/assets/images/service-icon-01.png" alt=""></i>
                            </div>
                            <h5 class="service-title">First Box Service</h5>
                            <p style="height: 100px">Aeneringilla quam aliquet. Sed a enim nec eros tempor cursus at id libero.</p>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <div class="item service-item">
                            <div class="icon">
                                <i><img src="assets/assets/images/service-icon-01.png" alt=""></i>
                            </div>
                            <h5 class="service-title">First Box Service</h5>
                            <p>Aenean vulputate massa sed neque consectetur, ac fringilla quam aliquet. Sed a enim nec eros tempor cursus at id libero.</p>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <div class="item service-item">
                            <div class="icon">
                                <i><img src="assets/assets/images/service-icon-01.png" alt=""></i>
                            </div>
                            <h5 class="service-title">First Box Service</h5>
                            <p>Aenean vulputate massa sed neque consectetur, ac fringilla quam aliquet. Sed a enim nec eros tempor cursus at id libero.</p>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <div class="item service-item">
                            <div class="icon">
                                <i><img src="assets/assets/images/service-icon-01.png" alt=""></i>
                            </div>
                            <h5 class="service-title">First Box Service</h5>
                            <p>Aenean vulputate massa sed neque consectetur, ac fringilla quam aliquet. Sed a enim nec eros tempor cursus at id libero.</p>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>

                

              
                        


            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection