@extends('halal.layouts.halal')

@section('title')
    <title>Binaan Halal ITS</title>
@endsection

@section('content')

	{{-- @php
		$values = explode(",", $binaan->pengiriman);
	@endphp --}}
    <!--================Home Banner Area =================-->
	<section class="banner_halal" style="background-image: ">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
                    <h2>Informasi Binaan</h2>
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
							@if($binaan->image == null)
							
								<div class="carousel-inner">
									<div class="carousel-item active">
										<p class="text-center" style="padding-bottom : 20px"> Tidak Ada Gambar Produk </p>
									</div>
								</div>
							
							@else
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" style="height: 300px" src="{{ asset('storage/products/' . $binaan->image) }}" alt="{{ $binaan->nama_umkm }}">
									</div>
								</div>
							
							@endif	
							{{-- <div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" style="height: 300px" src="{{ asset('storage/products/' . $binaan->image) }}" alt="{{ $binaan->nama_umkm }}">
								</div>
							</div> --}}
							{{-- <div class="carousel-inner text-center">
								<div class="carousel-item active">
									<a href="data:image/png;base64, {!! base64_encode($downloadQrCode) !!} " download>
										<img src="data:image/png;base64, {!! base64_encode($qrcode) !!} ">
									</a>
									<a href="data:image/png;base64, {!! base64_encode($downloadQrcodeWithLogo) !!} " download>
										<img src="data:image/png;base64, {!! base64_encode($qrcodeWithLogo) !!} ">
									</a>
								</div>
							</div> --}}
						</div>
					</div>
				</div>

				
				
				<div class="col-lg-8">
					<section class="product_description_area" style="margin-top: -10px; margin-bottom: 100px">
						<div class="container">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kontak</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="color: black">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<h5><b style="color: black">No Binaan</b></h5>
													</td>
													<td>
														<h5> : {!! $binaan->no_umkm !!}</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5><b style="color: black">Nama Lengkap</b></h5>
													</td>
													<td>
														<h5>: {!! $binaan->nama_pemilik !!}</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5><b style="color: black">Nama UMKM</b> </h5>
													</td>
													<td>
														<h5>: {!! $binaan->nama_umkm !!}</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5><b style="color: black">Nama Produk</b></h5>
													</td>
													<td>
														<h5>: {!! $binaan->nama_produk !!}</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5><b style="color: black">Tipe Binaan</b></h5>
													</td>
													<td>
														<h5>: {!! $binaan->tipe_binaan !!}</h5>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<h5>Alamat</h5>
													</td>
													<td>
														<h5>{{ $binaan->alamat }} , {{ $binaan->desa }}. {{ $binaan->kecamatan }}, {{ $binaan->kota }} </h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>No Whatsapp</h5>
													</td>
													<td>
														<h5>{{ $binaan->no_wa }}</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Email</h5>
													</td>
													<td>
														<h5>{{ $binaan->email }}</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Instagram</h5>
													</td>
													<td>
														<h5>{{ $binaan->instagram }}</h5>
													</td>
												</tr>
												<tr>
													<td>
														<h5>Facebook</h5>
													</td>
													<td>
														<h5>{{ $binaan->facebook }}</h5>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>				
			</div>

			
				
								
			</div>
		</div>
		
		{{-- untuk code qrcode --}}
		
		<div class="container">
			<div class="row s_product_inner">			
				<div class="col-lg-12">
					<section class="product_description_area" style="margin-top: -10px; margin-bottom: 100px">
						<div class="container">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active show" id="qrcode-tab" data-toggle="tab" href="#qrcode" role="tab" aria-controls="home" aria-selected="true">QrCode</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="qrcode2-tab" data-toggle="tab" href="#qrcode2" role="tab" aria-controls="profile" aria-selected="false">QrCode dengan Logo</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="qrcode" role="tabpanel" aria-labelledby="qrcode-tab" style="color: black">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td class="text-center">
														<h5 style="color: black"> Nomer Binaan : {{$binaan->no_umkm}} </h5>
														<a href="data:image/png;base64, {!! base64_encode($downloadQrCode) !!} " download>
															<img src="data:image/png;base64, {!! base64_encode($qrcode) !!} ">
														</a>
														<p>*Pasang kode ini di web anda untuk menampilkan QRcode anda di web</p>
														<p> <b>*Berlaku hingga Agustus 2022</b> </p>
														<button style="margin-bottom : 10px" type="button" onclick="Copy()" class="btn btn-primary">Copy</button>
														<textarea readonly rows="15" id="myQrCode" name="description" placeholder="informasi mengenai deskripsi yang menarik" id="description" class="form-control"><a href="http://halal.its.ac.id/binaan/{{$binaan->no_umkm}}"><img src="data:image/png;base64, {!! base64_encode($qrcode) !!} "></a></textarea>		
													</td>
												</tr>
												

											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="qrcode2" role="tabpanel" aria-labelledby="qrcode-tab">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												
												<tr>
													<td class="text-center">
														<h5 style="color: black"> Nomer Binaan : {{$binaan->no_umkm}} </h5>
														<a href="data:image/png;base64, {!! base64_encode($downloadQrcodeWithLogo) !!} " download>
															<img src="data:image/png;base64, {!! base64_encode($qrcodeWithLogo) !!} ">
														</a>
														<p>*Pasang kode ini di web anda untuk menampilkan QRcode anda di web</p>
														<p> <b>*Berlaku hingga Agustus 2022</b> </p>
														<button style="margin-bottom : 10px" type="button" onclick="CopyLogo()" class="btn btn-primary">Copy</button>
														<textarea readonly rows="15" id="myQrCodeLogo" name="description" placeholder="informasi mengenai deskripsi yang menarik" id="description" class="form-control"><a href="http://halal.its.ac.id/binaan/{{$binaan->no_umkm}}"><img src="data:image/png;base64, {!! base64_encode($qrcodeWithLogo) !!} "></a></textarea>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>				
								
			</div>
		</div>
	</div>
	
@endsection