@extends('halal.layouts.halal')

@section('title')
    <title>Halal ITS</title>
@endsection

@section('content')
   
	

    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">
                    <h2>Data Dosen Halal ITS</h2>
                </div>
            </div>

            {{-- <img src="{{ asset('/assets/dosens/1.png') }}"> --}}


            <div class="row ">
                <div class="col-md-2 col-sm-6 mb-2"></div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <img src="{{ asset('/assets/dosens/'.$nomerKetua.'.png') }}" class="card-img-top" alt="" height="350px">                    
                    </div>           
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <img src="{{ asset('/assets/dosens/'.$nomerWakilKetua.'.png') }}" class="card-img-top" alt="" height="350px">                    
                    </div>           
                </div>
                <div class="col-md-2 col-sm-6 mb-2"></div>
            </div>
            
            <div class="row ">
                    
                @forelse ($nomerDosen as $data)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card border-primary">
                        <img src="{{ asset('/assets/dosens/'.$data.'.png') }}" class="card-img-top" alt="" height="350px"> 
                    </div>
                    
                    </div>
                        @empty
                            <div class="col-md-12">
                                <h3 class="text-center">Tidak ada data</h3>
                            </div>
                        @endforelse    
                    </div>           
                </div>
            </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection