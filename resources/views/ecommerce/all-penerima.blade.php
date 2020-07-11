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
                    <h2>Halal ITS</h2>
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
                    <h2>Tampilan Semua Penerima</h2>
                </div>
            </div>
            <div class="row ">
                    
                @forelse ($penerima as $row)
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
                                <a href="https://api.whatsapp.com/send?phone=62{{ $row->no_wa }}&text=Assalamualaikum," style="color: white">Chat Wa</a>
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
                </div> 

            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection