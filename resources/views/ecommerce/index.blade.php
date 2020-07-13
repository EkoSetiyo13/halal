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
						<div class="col-md-3 col-sm-6 mb-3">
							<div class="card border-warning">
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
										<a href="https://api.whatsapp.com/send?phone=62{{ $row->no_wa }}&text=Assalamualaikum, %0ASaya%20ingin%20mendaftar%20sebagai%20penyuplai%20di%20Halal%20ITS" style="color: white">Chat Wa</a>
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
				</div>
			</div>
		</section>
		<!--================End Feature Product Area =================-->

		

			<!--================End Feature Product Area =================-->


		<section class="feature_product_area section_gap" style="margin-top: -100px">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Penerima terbaru</h2>
						<p>Salurkan hewan qurban anda ke mereka</p>
					</div>
				</div>


				<div class="row">	
					@forelse($penerima as $row)
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
									<a href="https://api.whatsapp.com/send?phone=62{{ $row->no_wa }}&text=Assalamualaikum, %0ASaya%20ingin%20mendaftar%20sebagai%20penerima%20di%20Halal%20ITS" style="color: white">Chat Wa</a>
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
			</div>
		</div>
	</section>

	<!--================Hot Deals Area =================-->

	<section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6 mb-3">
					<div>
						<img class="img-fluid" src="{{ asset('/ecommerce/img/instagram/1.jpeg') }}" alt="">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 mb-3">
					<div >
						<img class="img-fluid" src="{{ asset('/ecommerce/img/instagram/2.jpeg') }}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 mb-3">
					<div>
						<img class="img-fluid" src="{{ asset('/ecommerce/img/instagram/3.jpeg') }}" alt="">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 mb-3">
					<div >
						<img class="img-fluid" src="{{ asset('/ecommerce/img/instagram/4.jpeg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>


	{{-- <section class="hot_deals_area section_gap">
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
	</section> --}}
	<!--================End Hot Deals Area =================-->
@endsection