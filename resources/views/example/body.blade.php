@extends('layouts.index')

@section('title')
    <title>DW Ecommerce - Pusat Belanja Online</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="content">
        <div class="container">
          <div class="content-top">
            <h2 class="new">NEW ARRIVALS</h2>
            <div class="pink">
              <!-- requried-jsfiles-for owl -->
              <link href="css/owl.carousel.css" rel="stylesheet">
              <script src="js/owl.carousel.js"></script>
              <script>
                $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            items : 4,
                            lazyLoad : true,
                            autoPlay : true,
                            pagination : true,
                        });
                    });
                </script>
              <!-- //requried-jsfiles-for owl -->
              <div id="owl-demo" class="owl-carousel text-center">
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi11.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                    <!---
                    <a class="cup" href="single.html">123 $<i> </i> </a>
                    -->
                  </div>
                </div>
    
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi12.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
    
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi13.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
    
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
    
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi11.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
    
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi13.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi12.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
                <div class="item">
                  <div class=" box-in">
                    <div class=" grid_box">
                      <a href="single.html"> <img src="images/pi11.jpg" class="img-responsive" alt="">
                        <div class="zoom-icon">
    
                          <ul class="in-by">
                            <li>
                              <h5>sizes:</h5>
                            </li>
                            <li><span>S</span></li>
                            <li><span>XS</span></li>
                            <li><span>M</span></li>
                            <li><span> L</span></li>
                            <li><span>XL</span></li>
                            <li><span> XXL</span></li>
                          </ul>
    
    
                          <ul class="in-by-color">
                            <li>
                              <h5>colors:</h5>
                            </li>
                            <li><span> </span></li>
                            <li><span class="color"> </span></li>
                            <li><span class="color1"> </span></li>
                            <li><span class="color2"> </span></li>
                            <li><span class="color3"> </span></li>
    
                          </ul>
    
                        </div>
                      </a>
                    </div>
                    <!---->
                    <div class="grid_1 simpleCart_shelfItem">
                      <a href="#" class="cup item_add"><span class=" item_price">123 $ <i> </i> </span></a>
                    </div>
                    <!---->
                  </div>
                </div>
                <div class="clearfix"> </div>
              </div>
    
            </div>
    
          </div>
    
          <!---->
          <div class="content-middle">
            <h2 class="middle">BEST SALES</h2>
            <div class="col-best">
              <div class="col-md-4">
                <a href="single.html">
                  <div class="col-in">
                    <div class="col-in-left">
                      <img src="images/ni.jpg" class="img-responsive" alt="">
                    </div>
                </a>
                <div class="col-in-right grid_1 simpleCart_shelfItem">
                  <h5>fuel t-shirt mod : 9509</h5>
                  <ul class="star">
                    <li><a href="#"><i> </i> </a> </li>
                    <li><a href="#"><i> </i> </a> </li>
                    <li><a href="#"><i> </i> </a> </li>
                    <li><i class="in-star"> </i> </li>
                  </ul>
                  <!---->
                  <a href="#" class="item_add"><span class="white item_price">123 $ <i> </i> </span></a>
                  <!---->
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-md-4">
              <a href="single.html">
                <div class="col-in">
                  <div class="col-in-left">
                    <img src="images/ni1.jpg" class="img-responsive" alt="">
                  </div>
              </a>
              <div class="col-in-right grid_1 simpleCart_shelfItem">
                <h5>fuel t-shirt mod : 9509</h5>
                <ul class="star">
                  <li><i> </i> </li>
                  <li><i> </i> </li>
                  <li><i> </i> </li>
                  <li><i class="in-star"> </i> </li>
                </ul>
                <!---->
                <a href="#" class="item_add"><span class="white item_price">123 $ <i> </i> </span></a>
                <!---->
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class="col-md-4">
            <a href="single.html">
              <div class="col-in">
                <div class="col-in-left">
                  <img src="images/ni.jpg" class="img-responsive" alt="">
                </div>
            </a>
            <div class="col-in-right grid_1 simpleCart_shelfItem">
              <h5>fuel t-shirt mod : 9509</h5>
              <ul class="star">
                <li><i> </i> </li>
                <li><i> </i> </li>
                <li><i> </i> </li>
                <li><i class="in-star"> </i> </li>
              </ul>
              <!---->
              <a href="#" class="item_add"><span class="white item_price">123 $ <i> </i> </span></a>
              <!---->
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="clearfix"> </div>
    </section>
	<!--================End Hot Deals Area =================-->
@endsection