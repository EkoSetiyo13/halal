@extends('halal.layouts.halal')

@section('title')
  <title>Tanya Halal</title>
@endsection

@section('content')
  <section class="cat_product_area section_gap">
    <div class="container-fluid">
      <div class="row py-2">
        <div class="main_title">
          <h2>Tanya Halal</h2>
        </div>
      </div>
      <div class="row">
        <div class="main_title">
          <form action="{{ route('tanya-halal') }}" method="GET">
            <div class="row">
              <div class="searchbar">
                <input class="search_input" type="text" name="q" placeholder="Cari Produk Halal..."
                       value="{{ $query ?? '' }}">
                <button type="submit" class="search_icon"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      @if(!empty($products))
      <div class="row justify-content-center">
        <h4 class="col-12 text-center mb-3">Produk Terdaftar MUI</h4>
        <div class="col-12 mb-3 row justify-content-center">
          <table class="table col-12 col-md-6">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Produk</th>
              <th scope="col">Perusahaan/UMKM</th>
              <th scope="col">Sertifikat</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Penerbit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products['mui'] ?? [] as $product)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $product->produk }}</td>
                <td>{{ $product->perusahaan }}</td>
                <td>{{ $product->sertifikat }}</td>
                <td>{{ $product->tanggal }}</td>
                <td>{{ $product->penerbit }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <h4 class="col-12 text-center mb-3">Produk Binaan Halal ITS</h4>
        <div class="col-12 mb-3 row justify-content-center">
          <table class="table col-12 col-md-6">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Produk</th>
              <th scope="col">Perusahaan/UMKM</th>
              <th scope="col">Sertifikat</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Binaan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products['binaan'] ?? [] as $product)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $product->produk }}</td>
                <td><a href="{{ route('detail.binaan', ['no_binaan' => $product->sertifikat])  }}">{{ $product->perusahaan }}</a></td>
                <td>{{ $product->sertifikat }}</td>
                <td>{{ $product->tanggal }}</td>
                <td>{{ $product->penerbit }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @endif
    </div>
  </section>
  <!--================End Category Product Area =================-->
@endsection