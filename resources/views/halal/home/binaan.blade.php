@extends('halal.layouts.halal')

@section('title')
    <title>Halal ITS</title>
@endsection

@section('content')
   
	

    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">
                    <h2>Tampilan Semua Binaan</h2>
                </div>
            </div>
            <div class="row">
                <div class="main_title">
                    <form action="{{ url('binaan-cari') }}" method="GET">
                        <div class="row">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="q" placeholder="Search...">
                                <button type="submit" class="search_icon"><i class="fa fa-search"></i></button>    
                            </div>
                        </div>
                     </form>
                </div>
            </div>
            <div class="row ">
                    
                @forelse ($umkms as $data)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <div class="item service-item" style="height: 400px">
                            <h5 class="service-title" style="height: 50px">{{$data->nama_umkm}}</h5>
                            <p style="text-align: left; height: 50px"> <b>Nama Produk :</b> {{$data->nama_produk}}</p>
                            <p style="text-align: left; height: 10px"> <b>Alamat :</b> {{$data->kota}}</p>
                            <p style="text-align: left; height: 10px"> <b>No Binaan :</b> {{$data->no_umkm}}</p>
                            <p style="text-align: left; height: 20px"> <b>Pemilik :</b> {{$data->nama_pemilik}}</p>
                            <a href="{{ url('/binaan/' . $data->no_umkm) }}" class="main-button">Detail</a>
                        </div>
                    </div>
                    
                    </div>
                        @empty
                            <div class="col-md-12">
                                <h3 class="text-center">Tidak ada data</h3>
                            </div>
                        @endforelse    
                    </div>           
                </div>

            <div class="row">
                <div class="main_title">
                    {{ $umkms->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection