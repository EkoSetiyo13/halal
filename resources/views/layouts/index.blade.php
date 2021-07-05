<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
  <title>Markito A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Custom Theme files -->
  <!--theme-style-->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
  <!--//theme-style-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--fonts-->
  <link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
  <!--//fonts-->

  <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- start menu -->
  <link href="{{ asset('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="{{ asset('js/megamenu.js') }}"></script>
  <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

  <script src="{{ asset('js/simpleCart.min.js') }}"> </script>

</head>

<body>
  <!--header-->
  <div class="header">
    <div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: -</p>
				</div>
				<div class="float-right">
					

					@if (Route::has('login'))
						<ul class="right_side">
							<li>
							@auth
								<a href="{{ url('/home') }}">Beranda</a>
							@else
								<a href="{{ route('login') }}">Login</a>

								@if (Route::has('register'))
									<a href="{{ route('register') }}">Register</a>
								@endif
							@endauth
							
							</li>
						</ul>
					@endif
				</div>
			</div>
		</div>
    <div class="top-header">
      <div class="container">
        <div class="top-head">
          <div class="header-para">
            <ul class="social-in">
              <li><a href="#"><i> </i></a></li>
              <li><a href="#"><i class="ic"> </i></a></li>
              <li><a href="#"><i class="ic1"> </i></a></li>

            </ul>
          </div>

          <ul class="header-in">
            <li><a href="products.html"> brands</a></li>
            <li><a href="404.html">about us</a> </li>
            <li><a href="contact.html"> contact us</a></li>
            <li><a href="#"> how to use</a></li>
          </ul>
          <div class="search-top">
            <div class="search">
              <form>
                <input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}">
                <input type="submit" value="">
              </form>
            </div>
            <div class="world">
              <ul>
                <li><a href="#"><span> </span></a> </li>
                <li><select class="in-drop">
                    <option>EN</option>
                    <option>DE</option>
                    <option>ES</option>
                  </select>
                </li>
              </ul>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    <!---->
    @include('example.module.header')
    
  </div>
  <!--banner-->

  <div class="banner">
    <div class="container">
      <div class="wmuSlider example1">
        <div class="wmuSliderWrapper">
          <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">

              <div class="banner-top">
                <a href="single.html">
                  <div class="banner-top-in">
                    <img src="images/ba.png" class="img-responsive" alt="">
                  </div>
                </a>
                <div class="cart-at grid_1 simpleCart_shelfItem">
                  <div class="item_add"><span class="item_price">123 $ <i> </i> </span></div>
                  <div class="off">
                    <label>35% off !</label>
                    <p>White Blended Cotton "still fresh" t-shirt</p>
                  </div>
                </div>
                <div class="clearfix"> </div>

              </div>


              <div class="banner-top banner-bottom">
                <a href="single.html">
                  <div class="banner-top-in at">
                    <img src="images/ba2.png" class="img-responsive" alt="">
                  </div>
                </a>
                <div class="cart-at grid_1 simpleCart_shelfItem">
                  <div class="item_add"><span class="item_price">123 $ <i> </i> </span></div>
                  <div class="off">
                    <label>35% off !</label>
                    <p>White Blended Cotton "still fresh" t-shirt</p>
                  </div>
                </div>
                <div class="clearfix"> </div>

              </div>

              <div class="clearfix"> </div>

            </div>
          </article>
          <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">

              <div class="banner-top">
                <a href="single.html">
                  <div class="banner-top-in">
                    <img src="images/ba11.png" class="img-responsive" alt="">
                  </div>
                </a>
                <div class="cart-at grid_1 simpleCart_shelfItem">
                  <div class="item_add"><span class="item_price">123 $ <i> </i> </span></div>
                  <div class="off">
                    <label>35% off !</label>
                    <p>White Blended Cotton "still fresh" t-shirt</p>
                  </div>
                </div>
                <div class="clearfix"> </div>

              </div>


              <div class="banner-top banner-bottom">
                <a href="single.html">
                  <div class="banner-top-in at">
                    <img src="images/ba21.png" class="img-responsive" alt="">
                  </div>
                </a>
                <div class="cart-at grid_1 simpleCart_shelfItem">
                  <div class="item_add"><span class="item_price">123 $ <i> </i> </span></div>
                  <div class="off">
                    <label>35% off !</label>
                    <p>White Blended Cotton "still fresh" t-shirt</p>
                  </div>
                </div>
                <div class="clearfix"> </div>

              </div>

              <div class="clearfix"> </div>

            </div>
          </article>
          <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-wrap">

              <div class="banner-top">
                <a href="single.html">
                  <div class="banner-top-in">
                    <img src="images/ba12.png" class="img-responsive" alt="">
                  </div>
                </a>
                <div class="cart-at grid_1 simpleCart_shelfItem">
                  <div class="item_add"><span class="item_price">123 $ <i> </i> </span></div>
                  <div class="off">
                    <label>35% off !</label>
                    <p>White Blended Cotton "still fresh" t-shirt</p>
                  </div>
                </div>
                <div class="clearfix"> </div>

              </div>


              <div class="banner-top banner-bottom">
                <a href="single.html">
                  <div class="banner-top-in at">
                    <img src="images/ba22.png" class="img-responsive" alt="">
                  </div>
                </a>
                <div class="cart-at grid_1 simpleCart_shelfItem">
                  <div class="item_add"><span class="item_price">123 $ <i> </i> </span></div>
                  <div class="off">
                    <label>35% off !</label>
                    <p>White Blended Cotton "still fresh" t-shirt</p>
                  </div>
                </div>
                <div class="clearfix"> </div>

              </div>
              <div class="clearfix"> </div>

            </div>
          </article>
        </div>
        <ul class="wmuSliderPagination">
          <li><a href="#" class="">0</a></li>
          <li><a href="#" class="">1</a></li>
          <li><a href="#" class="wmuActive">2</a></li>
        </ul>
      </div>
      <!---->
      <script src="js/jquery.wmuSlider.js"></script>
      <script>
        $('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});
   		     </script>

    </div>
  </div>

  @yield('content')
  
  </div>
  <!---->

  <div class="content-bottom">
    <div class="col-md-8 latter">
      <h6>NEWSLETTER</h6>
      <p>sign up now to our newsletter discount! to get the Welcome discount</p>

      <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 latter-right">

      <form>
        <div class="join">
          <input type="text" value="your email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your email here';}">
          <i> </i>
        </div>
        <input type="submit" value="join us">
      </form>

    </div>
    <div class="clearfix"> </div>
  </div>

  <!---->
  <div class="bottom-content">

    <div class="col-md-4">
      <img src="images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="col-md-4">
      <img src="images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="col-md-4">
      <img src="images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="clearfix"> </div>
  </div>

  </div>
  </div>
  <!--footer-->
  <div class="footer">
    <div class="container">
      <div class="col-md-3 footer-left">
        <a href="index.html"><img src="images/logo.png" alt=""></a>
        <p class="footer-class">© 2015 Markito All Rights Reserved | Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
      </div>
      <div class="col-md-2 footer-middle">
        <ul>
          <li><a href="404.html">about us</a> </li>
          <li><a href="contact.html"> contact us</a></li>
          <li><a href="products.html"> our stores</a></li>
        </ul>
      </div>
      <div class="col-md-4 footer-left-in">
        <ul class="term">
          <li><a href="#">terms and conditions</a> </li>
          <li><a href="#"> markito in the press</a></li>
          <li><a href="#"> testimonials</a></li>
        </ul>
        <ul class="term">
          <li><a href="#">join us</a> </li>
          <li><a href="#"> markito videos</a></li>

        </ul>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-3 footer-right">
        <h5>WE SUPPORT</h5>
        <ul>
          <li><a href="#"><i> </i></a> </li>
          <li><a href="#"><i class="we"> </i></a></li>
          <li><a href="#"><i class="we-in"> </i></a></li>
          <li><a href="#"><i class="we-at"> </i></a></li>
          <li><a href="#"><i class="we-at-at"> </i></a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        /*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear'
					 		};
							*/

        $().UItoTop({
          easingType: 'easeOutQuart'
        });

      });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

  </div>

</body>

</html>
