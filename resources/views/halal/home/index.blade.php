@extends('halal.layouts.halal')

@section('title')
  <title>Pusat Kajian Halal</title>
@endsection

@section('content')

  <div class="welcome-area" id="welcome" style="margin-top: 80px">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
      <div class="container">
        <div class="row">
          <div class="left-text col-lg-7 col-md-6 col-sm-12 col-xs-12"
               data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <h1>Pusat Kajian Halal</h1>
            <p>Halal lifestyle advocate</p>
            <a href="/register/binaan" class="main-button-slider">Daftar Binaan</a>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12"
               data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
            <img src="assets/assets/images/slider-icon.png" class="rounded img-fluid d-block mx-auto"
                 alt="First Vector Graphic">
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Header Text End ***** -->
  </div>



  <section class="section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
          <img src="assets/assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
        </div>
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
          <div class="left-heading">
            <h5>Tentang PKH</h5>
          </div>
          <div class="left-text">
            <p>Pusat Kajian Halal ITS didirikan berdasarkan kebutuhan akan informasi halal yang lengkap dan akurat bagi
              komunitas Muslim tentang pentingnya produk halal. Hasil penelitian dari Pusat Kajian Halal ITS diharapkan
              dapat dengan mudah diterima dan dimanfaatkan oleh komunitas Muslim Indonesia secara keseluruhan.</p>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="hr"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Big Item End ***** -->


  <!-- ***** Features Big Item Start ***** -->
  <section class="section" id="about2">
    <div class="container">
      <div class="row">
        <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
          <div class="left-heading">
            <h5>Kegiatan PKH</h5>
          </div>
          <p>Berikut ini merupakan rekam jejak Pusat Kajian Halal Institut Teknologi Sepuluh Nopember (ITS) dalam
            berkontribusi mengembangkan sistem jaminan halal di Indonesia :</p>
          <ul>
            <li>
              <div>
                <h6>1. Persiapan dan pelatihan auditor bersertifikat</h6>
              </div>
            </li>
            <li>
              <div>
                <h6>2. Perawatan Halal ITS</h6>
              </div>
            </li>
            <li>
              <div>
                <h6>3. Peningkatan kapasitas melalui Focus Group Discussion (FGD), lokakarya, dan pelatihan</h6>
              </div>
            </li>
            <li>
              <div>
                <h6>4. Kegiatan penelitian terkait dengan produk halal</h6>
              </div>
            </li>
            <li>
              <div>
                <h6>5. Persiapan publikasi nasional melalui jurnal terkait halal</h6>
              </div>
            </li>
            <li>
              <div>
                <h6>6. Olimpiade Halal Nasional</h6>
              </div>
            </li>
            <li>
              <div>
                <h6>7. Pembentukan Lembaga Jaminan Halal (LPH)</h6>
              </div>
            </li>

          </ul>
        </div>
        <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big"
             data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
          <img src="assets/assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Big Item End ***** -->


  <!-- ***** Features Small Start ***** -->
  <section class="section" id="services">
    <div class="container">
      <div class="row">
        <div class="owl-carousel owl-theme">
          @forelse ($binaan as $data)
            <div class="item service-item" style="height: 400px">
              <h5 class="service-title" style="height: 50px">{{$data->nama_umkm}}</h5>
              <p style="text-align: left; height: 50px"><b>Nama Produk :</b> {{$data->nama_produk}}</p>
              <p style="text-align: left; height: 10px"><b>Alamat :</b> {{$data->kecamatan}} , {{$data->kota}}</p>
              <p style="text-align: left; height: 10px"><b>No Binaan :</b> {{$data->no_umkm}}</p>
              <p style="text-align: left; height: 20px"><b>Pemilik / Owner :</b> {{$data->nama_pemilik}}</p>
              <a href="{{ url('/binaan/' . $data->no_umkm) }}" class="main-button">Detail</a>
            </div>
          @empty
          @endforelse


        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Small End ***** -->


  <!-- ***** Frequently Question Start ***** -->
  <section class="section" id="frequently-question">
    <div class="container">
      <!-- ***** Section Title Start ***** -->
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Frequently Asked Questions</h2>
          </div>
        </div>
        {{-- <div class="offset-lg-3 col-lg-6">
            <div class="section-heading">
                <p>Vivamus venenatis eu mi ac mattis. Maecenas ut elementum sapien. Nunc euismod risus ac lobortis congue. Sed erat quam.</p>
            </div>
        </div> --}}
      </div>
      <!-- ***** Section Title End ***** -->

      <div class="row">
        {{-- <div class="left-text col-lg-6 col-md-6 col-sm-12">
            <h5>Class aptent taciti sociosqu ad litora torquent per conubia</h5>
            <div class="accordion-text">
                <p>Curabitur placerat diam in risus lobortis, laoreet porttitor est elementum. Nulla ultricies risus quis risus scelerisque, a aliquam tellus maximus. Cras pretium nulla ac convallis iaculis. Aenean bibendum erat vitae odio sodales, in facilisis tellus volutpat.</p>
                <p>Sed lobortis pellentesque magna ac congue. Suspendisse quis molestie magna, id eleifend ex. Ut mollis ultricies diam nec dictum. Morbi commodo hendrerit mi vel vulputate. Proin non tincidunt dui. Lorem ipsum dolor sit amet.</p>
                <span>Email: <a href="#">email@company.com</a><br></span>
                <a href="#contact-us" class="main-button">Contact Us</a>
            </div>
        </div> --}}
        <div class="col-lg-12 col-md-6 col-sm-12">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                <span>Apakah Itu Pusat Kajian Halal ?</span>
                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Pusat Studi Halal ialah suatu pusat penelitian yang berfokus pada penelitian produk halal.
                    <br><br>
                    Selain seminar, kegiatan Pusat Studi Halal meliputi kontribusi untuk membantu umkm dalam memahami
                    produk halal sebagai bentuk pengabdian masyarakata yang dilakukan di fakultas dan departemen lain di
                    ITS.</p>
                </div>
              </div>
            </article>
            {{-- <article class="accordion">
                <div class="accordion-head">
                    <span>Apa Keunggulan Pusat Kajian Halal</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Sed odio elit, cursus sed consequat at, rutrum eget augue. Cras ac eros iaculis, tempor quam sit amet, scelerisque mi. Quisque eu risus eget nunc porttitor vestibulum at a ante.
                        <br><br>
                        Praesent ut placerat turpis, vel pellentesque dolor. Sed rutrum eleifend tortor, eu luctus orci sagittis in. In blandit fringilla mollis.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Bagaimana mendaftar menjadi binaan</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Proin feugiat ante ut vulputate rutrum. Nam quis erat turpis. Nullam maximus pharetra lorem, eu condimentum est iaculis ut. Pellentesque mattis ultrices dignissim.
                        <br><br>
                        Etiam et enim finibus, feugiat massa efficitur, finibus sapien. Sed cursus lacus quis arcu scelerisque, eget ornare risus maximus. Aenean non lectus id odio rhoncus pharetra.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Saya tidak memiliki umkm, namun saya ingin mempelajari mengenai halal. apakah boleh?</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Phasellus eu purus ornare, eleifend orci nec, egestas nulla. Sed sed aliquet sapien. Proin placerat, ipsum eu posuere blandit, tellus quam consectetur nisi, id sollicitudin diam ex at nisi.
                        <br><br>
                        Aenean fermentum eget turpis egestas semper. Sed finibus mollis venenatis. Praesent at sem in massa iaculis pharetra.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Pertanyaan 5</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Quisque aliquet ipsum ut magna rhoncus, euismod lacinia elit rhoncus. Sed sapien elit, mollis ut ultricies quis, fermentum nec ante.
                        <br><br>
                        Sed nec ex nec tortor fermentum sollicitudin id ut ligula. Ut sagittis rutrum lectus, non sagittis ante euismod eu. </p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Pertanyaan ke 6</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Suspendisse potenti. Ut dapibus leo ut massa vulputate semper. Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum sodales. Aliquam erat volutpat.</p>
                    </div>
                </div>
            </article> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Frequently Question End ***** -->


  <!-- ***** Contact Us Start ***** -->
  <section class="section" id="contact-us">
    <div class="container-fluid">
      <div class="row">
        <!-- ***** Contact Map Start ***** -->
        <div class="col-lg-12 col-md-6 col-sm-12">
          <div id="map">
            <!-- How to change your own map point
                 1. Go to Google Maps
                 2. Click on your location point
                 3. Click "Share" and choose "Embed map" tab
                 4. Copy only URL and paste it within the src="" field below
          -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6451854505704!2d112.79512591477486!3d-7.281150894744579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1267ac4921%3A0x907234430e043740!2sGedung%20Pusat%20Riset%20ITS!5e0!3m2!1sid!2sid!4v1598176067492!5m2!1sid!2sid"
                width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <!-- ***** Contact Map End ***** -->

        <!-- ***** Contact Form Start ***** -->
      {{-- <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field">
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button">Send It</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
      </div> --}}
      <!-- ***** Contact Form End ***** -->
      </div>
    </div>
  </section>

  {{-- <section class="hot_deals_area section_gap">
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
  </section> --}}



@endsection