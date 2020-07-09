@extends('layouts.ecommerce')

@section('title')
    <title>DW Ecommerce - Pusat Belanja Online</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>Selamat 
							<br />Hari Raya Kurban</h3>
						<p>Daging (hewan kurban) dan darahnya itu sekali-kali tidak sampai kepada Allah, tetapi sampai kepada-Nya adalah ketakwaanmu” – QS. Al Hajj:37</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Feature Product Area =================-->

	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Penerima Qurban Terbaru</h2>
						<p>Salurkan Qurban Anda</p>
					</div>
				</div>
				<div class="row">
          
          @forelse($penerima as $row)
				<div class="col-lg-3 col-md-3 col-sm-6">
									
					<div class="card" style="width: 18rem;">
						<img class="img-fluid" style="height: 300px" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
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
                    
          @endforelse
				</div>

				<div class="row">
					{{ $penerima->links() }}
				</div>
			</div>
		</div>
	</section>

	{{-- ================================================================== --}}

	{{-- <section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ $post1->image }}" alt="">
						<div class="content">
							<h2>{{ $post1->name }}</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}




	{{-- =================================================================== --}}

	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Penyuplai terbaru</h2>
						<p>Berqurbanlah Anda</p>
					</div>
				</div>
				<div class="row">
          
          @forelse($penyuplai as $row)
			<div class="col-lg-3 col-md-3 col-sm-6">
								
				<div class="card" style="width: 18rem;">
					<img class="img-fluid" style="height: 300px" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
					<div class="card-body">
						<a href="{{ url('/penyuplai/' . $row->slug) }}">
							<h3 class="card-title">{{ $row->name }}</h3>
						</a>
						<h6> alamat : {{ $row->alamat }}</h6>
						<button type="button" class="btn btn-primary">
							<a href="https://api.whatsapp.com/send?phone=62{{ $row->no_wa }}&text=Assalamualaikum," style="color: white">Chat Wa</a>
						</button>
						<button type="button" class="btn btn-primary">
							<a href="{{ url('/penyuplai/' . $row->slug) }}" style="color: white">detail</a>
						</button>      
					</div>
				</div>
		</div>
          @empty
                    
          @endforelse
				</div>

				<div class="row">
					{{ $penyuplai->links() }}
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->

	<!--================Hot Deals Area =================-->
	<section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Hot Deals Area =================-->
@endsection