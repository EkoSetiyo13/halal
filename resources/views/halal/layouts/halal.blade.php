<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('/ecommerce/img/logo_halal.png') }}" type="image/png">   
	<link rel="stylesheet" href="{{ asset('ecommerce/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/jquery-ui/jquery-ui.css') }}">
	
	<link rel="stylesheet" href="{{ asset('ecommerce/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/responsive.css') }}">

	{{-- template halal --}}
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/assets/css/templatemo-art-factory.css">
	<link rel="stylesheet" type="text/css" href="assets/assets/css/owl-carousel.css">
	{{-- template halal --}}


	<style>
		.collapse-content .fa.fa-heart:hover {
		color: #f44336 !important;
		}
		.collapse-content .fa.fa-share-alt:hover {
		color: #0d47a1 !important;
		}
	</style>

</head>

<body>
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu" >
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#0c48a8">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}">
						<img src="{{ asset('/ecommerce/img/logo_halal.png') }}" alt="" height="100px">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-12 pr-0">
								@include('halal.layouts.menu')
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

    @yield('content')
    
	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap" style="background-color:#0c48a8">
		<div class="container" >
			<div class="row" >
				<div class="col-lg-2  col-md-3 col-sm-3">
					<div class="single-footer-widget">
						<img src="https://www.its.ac.id/wp-content/uploads/2017/10/logo-its-1.png" alt="" width="100%">
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div>
						<h6 class="footer_title" style="color:white">Struktur Organisasi</h6>
						<p style="color:white">
							Kepala Pusat Kajian Halal <br>
							<b>Setiyo Gunawan, S.T., Ph.D</b> <br>
							Wakil Kepala Pusat Kajian Halal <br>
							<b>Nur Aini Rakhmawati, S.Kom., M.Sc.Eng., Ph.D. </b>
							
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div >
						<h6 class="footer_title" style="color:white">Alamat Kantor :</h6>
						<p style="color:white">
							Direktorat Riset dan Pengabdian kepada Masyarakat<br>
							Gedung Pusat Riset ITS Lantai 5 <br>
							Kampus ITS Sukolilo Surabaya <br>
						</p>
					</div>
				</div>				
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title" style="color:white">Temukan kami</h6>
						{{-- <p style="color:white">Let us be social</p> --}}
						<div class="f_social">
							<a href="https://www.youtube.com/channel/UC1w8exIbcFjTh-snkojwlPw/" style="color:white">
								<i class="fa fa-youtube"></i>
							</a>
							<a href="https://www.instagram.com/itshalalcenter/?hl=id" style="color:white">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="itshalalcenter@its.ac.id" style="color:white">
								<i class="fa fa-envelope"></i>
							</a>
							<a href="https://play.google.com/store/apps/developer?id=Nur+Aini+R+%28Pusat+Kajian+Halal+ITS%29" style="color:white">
								<i class="fa  fa-play "></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row" >
				<div class="col-lg-12 col-md-12 col-sm-12">
                    <p style="font-size: 10px; color : white; text-align: center;" class="copyright">Copyright &copy; 2020 Art Factory Company</p>
                </div>				
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<script src="{{ asset('ecommerce/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/popper.js') }}"></script>
	<script src="{{ asset('ecommerce/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/stellar.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/flipclock/timer.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.counterup.js') }}"></script>
	<script src="{{ asset('ecommerce/js/mail-script.js') }}"></script>
	<script src="{{ asset('ecommerce/js/theme.js') }}"></script>
	<script src="{{ asset('ecommerce/js/jquery.slim.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/bootstrap.bundle.min.js') }}"></script>

	<script src="assets/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/assets/js/popper.js"></script>
    <script src="assets/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/assets/js/owl-carousel.js"></script>
    <script src="assets/assets/js/scrollreveal.min.js"></script>
    <script src="assets/assets/js/waypoints.min.js"></script>
    <script src="assets/assets/js/jquery.counterup.min.js"></script>
    <script src="assets/assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/assets/js/custom.js"></script>

	<script type="text/javascript">
		$( '#topheader .navbar-nav a' ).on( 'click', function () {
			$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
			$( this ).parent( 'li' ).addClass( 'active' );
		});
	</script>
</body>
</html>