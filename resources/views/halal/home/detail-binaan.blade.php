@extends('halal.layouts.halal')

@section('title')
<title>Binaan Halal ITS</title>
@endsection

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_halal">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content text-center">
        <h2>Informasi Binaan <br> {{ $binaan->nama_umkm }}</h2>
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
            @if(empty($binaan->image))
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
                          <h5> : {{ $binaan->no_umkm }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">Nama Lengkap</b></h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->nama_pemilik }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">Nama UMKM</b></h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->nama_umkm }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">Nama Produk</b></h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->nama_produk }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">Tipe Binaan</b></h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->tipe_binaan }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">No BPOM</b></h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->bpom }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">No PIRT</b></h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->pirt }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">No Sertifikat Halal</b></h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->sertifikat_halal }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5><b style="color: black">Video Produk</b></h5>
                        </td>
                        <td>
                          @if($binaan->video ?? false)
                          <h5>: <a href="{{ $binaan->video }}">Kunjungi</a></h5>
                          @endif
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
                          <h5>: {{ $binaan->alamat }} , {{ $binaan->desa }}. {{ $binaan->kecamatan }}
                            , {{ $binaan->kota }} </h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>No Whatsapp</h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->no_wa }} <a class="btn btn-success btn-sm" target="_blank" href="https://api.whatsapp.com/send?phone=62{{ substr($binaan->no_wa, 1) }}&text=Assalamualaikum Pak/Bu ,saya dapat informasi anda dari Binaan Halal ITS">Chat Sekarang</a></h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Email</h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->email }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Instagram</h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->instagram }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Facebook</h5>
                        </td>
                        <td>
                          <h5>: {{ $binaan->facebook }}</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Google Map</h5>
                        </td>
                        <td>
                          <h5>
                            :
                            @if($binaan->google_map ?? false)
                            <a href="{{ $binaan->google_map }}">Google Map</a>
                            @else
                            -
                            @endif
                          </h5>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h5>Website/Toko Onine</h5>
                        </td>
                        <td>
                          <h5>:
                            @foreach(['bukalapak', 'shopee', 'tokopedia', 'website', 'produkdesa'] as $field)
                            @if($binaan->{$field} ?? false)
                            <a href="{{ $binaan->{$field} }}">{{ ucfirst($field) }}</a>
                            @endif
                            @endforeach
                          </h5>
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
@component('halal.home.components.qrcode', [
'idBinaan' => $binaan->no_umkm,
'plainQRCode' => $plainQRCode,
'logoQRCode' => $logoQRCode,
'urlBinaan' => route('detail.binaan', ['no_binaan' => $binaan->no_umkm])
])
@endcomponent
@endsection

@if(!empty($jsonld ?? ''))
@section('jsonld')
<script type="application/ld+json">
  @json($jsonld)
</script>
@endsection
@endif