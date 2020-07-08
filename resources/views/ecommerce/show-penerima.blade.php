@extends('layouts.ecommerce')

@section('title')
    <title>Jual {{ $penerima->name }}</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
                    <h2>{{ $penerima->name }}</h2>
					<div class="page_link">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="#">{{ $penerima->name }}</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-4">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<h3 class="text-center">{{ $penerima->name }}</h3>
								<div class="carousel-item active">
									<img class="d-block w-100" src="{{ asset('storage/products/' . $penerima->image) }}" alt="{{ $penerima->name }}">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 product_description_area">
					<div class="container">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="color: black">
								{!! $penerima->description !!}
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<h5>Jumlah Sapi</h5>
												</td>
												<td>
													<h5>{{ $penerima->jumlah_sapi }} ekor</h5>
												</td>
											</tr>
											<tr>
												<td>
													<h5>Jumlah Kambing</h5>
												</td>
												<td>
													<h5>{{ $penerima->jumlah_kambing }} ekor</h5>
												</td>
											</tr>
											<tr>
												<td>
													<h5>Jumlah Kerbau</h5>
												</td>
												<td>
													<h5>{{ $penerima->jumlah_kerbau }} ekor</h5>
												</td>
											</tr>
											<tr>
												<td>
													<h5>Yang Lain</h5>
												</td>
												<td>
													<h5>{{ $penerima->jumlah_lain }} ekor</h5>
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
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	
	<!--================End Product Description Area =================-->
@endsection