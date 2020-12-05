<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="SellIt">
   <meta name="author" content="SellIt">
   <title>SellIt - E-Commerce Website</title>
   <!-- Favicon Icon -->
   <link rel="icon" type="image/png" href="img/fav-icon.png">
   <!-- Bootstrap core CSS -->
   <link href="{{ asset('shop/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <!-- Slider CSS -->
   <link rel="stylesheet" href="{{ asset('shop/template/vendor/slider/slider.css') }}">
   <!-- Select2 CSS -->
   <link href="{{ asset('shop/template/vendor/select2/css/select2-bootstrap.css') }}" />
   <link href="{{ asset('shop/template/vendor/select2/css/select2.min.css') }}" rel="stylesheet" />
   <!-- Font Awesome-->
   <link href="{{ asset('shop/template/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
   <link href="{{ asset('shop/template/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="{{ asset('shop/template/css/style.css') }}" rel="stylesheet">
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="{{ asset('shop/template/vendor/owl-carousel/') }}owl.carousel.css">
   <link rel="stylesheet" href="{{ asset('shop/template/vendor/owl-carousel/owl.theme.css') }}">

</head>

<body>
   <div class="btn-primary pt-2 pb-2">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 text-center">
               <a href="shop.html" class="mb-0 text-white">
                  40% CASHBACK FOR NEW USERS | CODE: <strong><span class="text-light">GURDEEPOSAHAN40 <span
                           class="mdi mdi-tag-faces"></span></span> </strong>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade login-modal-main" id="login">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <div class="login-modal">
                  <div class="row">
                     <div class="col-lg-6 d-flex align-items-center">
                        <div class="login-modal-left p-4 text-center pl-5">
                           <img src="img/login.jpg" alt="Gurdeep singh osahan">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <button type="button" class="close close-top-right position-absolute" data-dismiss="modal"
                           aria-label="Close">
                           <span aria-hidden="true"><i class="icofont-close-line"></i></span>
                           <span class="sr-only">Close</span>
                        </button>

                        <form class="position-relative">
                           <ul class="mt-4 mr-4 nav nav-tabs-login float-right position-absolute" role="tablist">
                              <li>
                                    <a class="nav-link-login" data-toggle="tab" href="#register" role="tab"><i
                                        class="icofont icofont-pencil"></i> REGISTER</a>

                              </li>
                              <li>
                                    <a class="nav-link-login" data-toggle="tab" href="#register" role="tab"><i
                                        class="icofont icofont-pencil"></i> REGISTER</a>

                              </li>
                           </ul>
                           <div class="login-modal-right p-4">
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div class="tab-pane active" id="login-form" role="tabpanel">
                                    <h5 class="heading-design-h5 text-dark">LOGIN</h5>
                                    <fieldset class="form-group mt-4">
                                       <label>Enter Email/Mobile number</label>
                                       <input type="text" class="form-control" placeholder="+91 123 456 7890">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Enter Password</label>
                                       <input type="password" class="form-control" placeholder="********">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <button type="submit" class="btn btn-lg btn-primary btn-block">Enter to your
                                          account</button>
                                    </fieldset>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="customCheck1">
                                       <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                    <div class="login-with-sites mt-4">
                                       <p class="mb-2">or Login with your social profile:</p>
                                       <div class="row text-center">
                                          <div class="col-6 pr-1">
                                             <button class="btn-facebook btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-facebook"></i> Facebook</button>
                                          </div>
                                          <div class="col-6 pl-1">
                                             <button class="btn-google btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-google-plus"></i> Google</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="register" role="tabpanel">
                                    <h5 class="heading-design-h5 text-dark">REGISTER</h5>
                                    <fieldset class="form-group mt-4">
                                       <label>Enter Email/Mobile number</label>
                                       <input type="text" class="form-control" placeholder="+91 123 456 7890">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Enter Password</label>
                                       <input type="password" class="form-control" placeholder="********">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Enter Confirm Password </label>
                                       <input type="password" class="form-control" placeholder="********">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <button type="submit" class="btn btn-lg btn-primary btn-block">Create Your
                                          Account</button>
                                    </fieldset>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="customCheck2">
                                       <label class="custom-control-label" for="customCheck2">I Agree with <a
                                             href="#">Term and Conditions</a></label>
                                    </div>
                                    <div class="login-with-sites mt-4">
                                       <p class="mb-2">or Login with your social profile:</p>
                                       <div class="row text-center">
                                          <div class="col-6 pr-1">
                                             <button class="btn-facebook btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-facebook"></i> Facebook</button>
                                          </div>
                                          <div class="col-6 pl-1">
                                             <button class="btn-google btn-block login-icons btn-lg"><i
                                                   class="icofont icofont-google-plus"></i> Google</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="bg-light">
      <div class="header-top border-bottom bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <ul class="list-inline float-right mb-0">
                     <li class="list-inline-item border-right border-left py-1 pr-2 mr-2 pl-2">
                        <a href=""><i class="icofont icofont-iphone"></i> 682-552-3338</a>
                     </li>
                     <li class="list-inline-item border-right py-1 pr-2 mr-2">
                        <a href="contact-us.html"><i class="icofont icofont-headphone-alt"></i> Contact Us</a>
                     </li>
                     <li class="list-inline-item">
                        <span>Download App</span> &nbsp;
                        <a href="#"><i class="icofont icofont-brand-windows"></i></a>
                        <a href="#"><i class="icofont icofont-brand-apple"></i></a>
                        <a href="#"><i class="icofont icofont-brand-android-robot"></i></a>
                     </li>
                  </ul>
                  <p class="mb-0 py-1">FREE CASH ON DELIVERY &amp; SHIPPING AVAILABLE OVER <span
                        class="text-danger font-weight-bold">$499</span></p>
               </div>
            </div>
         </div>
      </div>
      <div class="main-nav shadow-sm">
         <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
            <div class="container">
               <a class="navbar-brand" href="index.html">
                  <img src="img/logo.png" alt="elle's">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto main-nav-left">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="icofont-ui-home"></i></a>
                     </li>

                     @foreach(App\Category::all() as $cat)
                     <li class="nav-item dropdown mega-drop-main">

                        <a href="{{ route('product.list', [$cat->slug]) }}"class="nav-link">

                           {{ $cat->name }}

                        </a>

                        <!-- <a href="{{ route('product.list', [$cat->slug]) }}" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"">
                                <button class="btn btn-outline-success">{{ $cat->name }}</button></a> -->

                        <div class="dropdown-menu mega-drop  shadow-sm border-0" aria-labelledby="navbarDropdown">
                           <div class="row ml-0 mr-0">
                                @foreach($cat->subcategory as $subcategory)
                              <div class="col-lg-2 col-md-2">

                                 <div class="mega-list">


                                    <!--<a class="mega-title" href="">{{ $subcategory->name }}</a>-->
                                    <a href="{{ route('subcategory.list', [$subcategory->slug]) }}">{{ $subcategory->name }}</a>

                                 </div>

                              </div>
                              @endforeach

                           </div>
                        </div>

                     </li>
                     @endforeach




                  </ul>
                  <form action="{{ route('more.product') }}" method="GET" class="form-inline my-2 my-lg-0 top-search">
                     <button class="btn-link" type="submit"><i class="icofont-search"></i></button>
                     <input class="form-control mr-sm-2" type="text" name="search"
                        placeholder="Search for products, brands and more" aria-label="Search">
                  </form>
                  <ul class="navbar-nav ml-auto profile-nav-right">

                     <li class="nav-item cart-nav">
                        @if(Auth::check())
                       <a href="{{ route('order') }}" class="nav-link"><i class="icofont-gift-box"></i>Order</a></li>
                        @endif


                        <a href="{{ route('cart.show') }}" class="nav-link">
                           <i class="icofont-basket"></i> Cart
                           <span class="badge badge-danger">
                                ({{session()->has('cart')?session()->get('cart')->totalQty:'0'}})
                           </span>
                        </a>




                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else



                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                    @if(Auth::check())
                                    <a class="dropdown-item" href="{{ route('order') }}"> Order</a></li>
                                    @endif



                                 <li class="nav-item cart-nav">
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            @if (session('error'))
<div class="col-md-3 alert alert-warning">{{ session('error') }}</div>
@endif




        </div>
    </nav>






                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </div>

   @yield('content')



   <!-- Footer -->
   <footer class="bg-white border-bottom border-top">
      <div class="container">
         <div class="row no-gutters">
            <div class="col-md-4">
               <div class="border-right py-5 pr-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">TOP CATEGORIES</h6>
                  <div class="row no-gutters">
                     <div class="col-6">
                        <ul class="list-unstyled mb-0">
                                @foreach(App\Category::all() as $cat)
                           <li><a href="#">{{ $cat->name }}</a></li>
                           @endforeach

                        </ul>
                     </div>

                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="border-right py-5 px-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">ABOUT US</h6>
                  <div class="row no-gutters">
                     <div class="col-6">
                        <ul class="list-unstyled mb-0">
                           <li><a href="#">History</a></li>
                           <li><a href="#">Band of Trust</a></li>
                           <li><a href="#">Brand Guidelines</a></li>
                           <li><a href="#">TV Commercials</a></li>
                           <li><a href="#">In the News
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <ul class="list-unstyled mb-0">
                           <li><a href="#">Awards</a></li>
                           <li><a href="#">Terms & Conditions</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                           <li><a href="#">Careers</a></li>
                           <li><a href="#">Offers</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="py-5 pl-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">DOWNLOAD APP</h6>
                  <div class="app">
                     <a href="#">
                        <img class="img-fluid" src="img/google.png">
                     </a>
                     <a href="#">
                        <img class="img-fluid" src="img/apple.png">
                     </a>
                  </div>
                  <h6 class="mt-4 mb-4 f-14 text-dark font-weight-bold">KEEP IN TOUCH</h6>
                  <div class="footer-social">
                     <a class="btn-facebook" href="#"><i class="icofont-facebook"></i></a>
                     <a class="btn-twitter" href="#"><i class="icofont-twitter"></i></a>
                     <a class="btn-instagram" href="#"><i class="icofont-instagram"></i></a>
                     <a class="btn-whatsapp" href="#"><i class="icofont-whatsapp"></i></a>
                     <a class="btn-messenger" href="#"><i class="icofont-facebook-messenger"></i></a>
                     <a class="btn-google" href="#"><i class="icofont-google-plus"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container -->
   </footer>
   <div class="popular-tag py-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">POPULAR SEARCHES</h6>
               <p class="mb-0">
                    @foreach(App\Category::all() as $cat)
                    @foreach($cat->subcategory as $subcategory)
                  <a href="#">{{ $subcategory->name }}</a> &nbsp; | &nbsp;
                    @endforeach
                    @endforeach


               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright bg-light py-3">
      <div class="container">
         <div class="row">
            <div class="col-md-6 d-flex align-items-center">
               <p class="mb-0">© Copyright 2020 <a href="#">Elle</a> . All Rights Reserved
               </p>
            </div>
            <div class="col-md-6 text-right">
               <img class="img-fluid" src="img/payment_methods.png">
            </div>
         </div>
      </div>
   </div>
   <div class="cart-sidebar">
      <div class="cart-sidebar-header">
         <h5>
            My Cart <span class="text-info">(5 item)</span> <a data-toggle="offcanvas" class="float-right" href="#"><i
                  class="icofont icofont-close-line"></i>
            </a>
         </h5>
      </div>
      <div class="cart-sidebar-body">
            @if($cart ?? '')
            @php $i=1 @endphp
            @foreach($cart->items as $product)
         <div class="cart-list-product">
            <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
            <img class="img-fluid" src="{{ Storage::url($product['image']) }}" alt="">
            <span class="badge badge-success">50% OFF</span>
            <h5><a href="#">{{ $product['name'] }}</a></h5>

            <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                  class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span></div>
            <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">${{ $product['price'] }} </del></p>
            <span class="count-number float-left">
               <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
               <input class="count-number-input" type="text" value="1" readonly="">
               <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
            </span>
         </div>
         @endforeach
         @endif
      </div>



      <div class="cart-sidebar-footer">
         <div class="cart-store-details">
            <p>Sub Total <strong class="float-right">$900.69</strong></p>
            <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p>
            <h6>Your total savings <strong class="float-right text-danger">$55 (42.31%)</strong></h6>
         </div>
         <a href="checkout.html"><button class="btn btn-primary btn-lg btn-block text-left" type="button"><span
                  class="float-left"><i class="icofont icofont-cart"></i> Proceed to Checkout </span><span
                  class="float-right"><strong>$1200.69</strong> <span
                     class="icofont icofont-bubble-right"></span></span></button></a>
      </div>
   </div>
   <!-- Bootstrap core JavaScript -->
   <script src="{{ asset('shop/template/vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('shop/template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- select2 Js -->
   <script src="{{ asset('shop/template/vendor/select2/js/select2.min.js') }}"></script>
   <!-- Owl Carousel -->
   <script src="{{ asset('shop/template/vendor/owl-carousel/owl.carousel.js') }}"></script>
   <!-- Slider Js -->
   <script src="{{ asset('shop/template/vendor/slider/slider.js') }}"></script>
   <!-- Custom scripts for all pages-->
   <script src="{{ asset('shop/template/js/custom.js') }}"></script>
</body>

</html>
