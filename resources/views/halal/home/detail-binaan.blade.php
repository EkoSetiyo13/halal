@extends('halal.layouts.halal')

@section('title')
    <title>Binaan Halal ITS</title>
@endsection

@section('content')

	{{-- @php
		$values = explode(",", $penyuplai->pengiriman);
	@endphp --}}
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
                    <h2>Informasi Binaan</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	{{-- <div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-4">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" style="height: 300px" src="{{ asset('storage/products/' . $penyuplai->image) }}" alt="{{ $penyuplai->name }}">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" style="height: 300px" src="{{ asset('storage/products/' . $penyuplai->image2) }}" alt="{{ $penyuplai->name }}">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" style="height: 300px" src="{{ asset('storage/products/' . $penyuplai->image3) }}" alt="{{ $penyuplai->name }}">
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->
	<section class="product_description_area">
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
					<p> <b style="color: black">Description</b> : {!! $penyuplai->description !!}</p>
					<p> <b style="color: black">Alamat</b> : {!! $penyuplai->alamat !!}</p>
					<div class="form-row">
						<div class="col-md-12 mb-3">
						  <label class="form-control-label" for="validationCustom02">
							<b style="color: black">Cara pengiriman yang disediakan</b>
						  </label>
	
						  <div class="row">
							<div class="col-md-6">
							  <div class="custom-control custom-checkbox mb-3">
								<input class="custom-control-input" name="pengiriman[]" value="bebas ongkir dalam kota radius 5KM" id="customCheck1" type="checkbox" @if(in_array("bebas ongkir dalam kota radius 5KM", $values)) checked @endif>
								<label class="custom-control-label" for="customCheck1">bebas ongkir dalam kota radius 5KM</label>
							  </div>
							  <div class="custom-control custom-checkbox mb-3">
								<input class="custom-control-input" name="pengiriman[]" value="bebas ongkir dalam kota" id="customCheck2" type="checkbox" @if(in_array("bebas ongkir dalam kota", $values)) checked @endif>
								<label class="custom-control-label" for="customCheck2">bebas ongkir dalam kota</label>
							  </div>
							  <div class="custom-control custom-checkbox mb-3">
								<input class="custom-control-input" name="pengiriman[]" value="bayar ongkir dalam kota" id="customCheck3" type="checkbox" @if(in_array("bayar ongkir dalam kota", $values)) checked @endif>
								<label class="custom-control-label" for="customCheck3">bayar ongkir dalam kota </label>
							  </div>
							  <div class="custom-control custom-checkbox mb-3">
								<input class="custom-control-input" name="pengiriman[]" value="siap kirim luar kota dengan ongkos kirim" id="customCheck5" type="checkbox" @if(in_array("siap kirim luar kota dengan ongkos kirim", $values)) checked @endif>
								<label class="custom-control-label" for="customCheck4">siap kirim luar kota dengan ongkos kirim</label>
							  </div>
							  <div class="custom-control custom-checkbox mb-3">
								<input class="custom-control-input" name="pengiriman[]" value="bisa diambil sendiri" id="customCheck5" type="checkbox" @if(in_array("bisa diambil sendiri", $values)) checked @endif>
								<label class="custom-control-label" for="customCheck5">bisa diambil sendiri</label>
							  </div>

						  </div>

						 </div>
						</div>
					  </div>
					<p> <b style="color: black">Chat sekarang</b>  <a href="https://api.whatsapp.com/send?phone=62{{ substr($penyuplai->no_wa,1) }}&text=Assalamualaikum,">{{ $penyuplai->no_wa}}</a></p>
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
										<h5>{{ $penyuplai->jumlah_sapi }} ekor</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Jumlah Kambing</h5>
									</td>
									<td>
										<h5>{{ $penyuplai->jumlah_kambing }} ekor</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Jumlah Kerbau</h5>
									</td>
									<td>
										<h5>{{ $penyuplai->jumlah_kerbau }} ekor</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Yang Lain</h5>
									</td>
									<td>
										<h5>{{ $penyuplai->jumlah_lain }} ekor</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	
@endsection