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
            <div class="row ">
                <div class="latest_product_inner row">
                    @forelse ($penerima as $row)
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
                                <div class="card-body">
                                    <a href="{{ url('/penerima/' . $row->slug) }}">
                                        <h3 class="card-title">{{ $row->name }}</h3>
                                    </a>
                                    <p class="card-text">{{ $row->description }}</p>
                                    <h6> alamat : {{ $row->alamat }}</h6> 
                                    <button type="button" class="btn btn-primary">
                                        <a href="https://api.whatsapp.com/send?phone=62{{ $row->no_wa }}&text=Assalamualaikum," style="color: white">Hubungi Sekarang</a>
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

            <div class="row">
                {{ $penerima->links() }}
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection