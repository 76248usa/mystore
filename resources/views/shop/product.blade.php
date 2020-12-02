@extends('layouts.product_layout')
@section('content')


   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/car1.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/carous1.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/carous3.jpg') }}" alt="Third slide">
          </div>
        </div>
      </div>


   <section class="py-5">
        <div class="container">
           <div class="row">
              <div class="col-4">
                 <div class="offers-block"><a href="#">
                       <img class="img-fluid" src="{{ asset('images/carous1.jpg') }}" alt=""></a>
                 </div>
              </div>
              <div class="col-4">
                 <div class="offers-block"> <a href="#"><img class="img-fluid mb-3" src="{{ asset('images/carous2.jpg') }}" alt=""></a>
                 </div>
                 <div class="offers-block"><a href="#"><img class="img-fluid" src="{{ asset('images/car1.jpg') }}" alt=""></a></div>
              </div>
              <div class="col-4">
                 <div class="offers-block"><a href="#"><img class="img-fluid" src="{{ asset('images/carous3.jpg') }}" alt=""></a></div>
              </div>
           </div>
        </div>
     </section>







   <section class="product-list pbc-5 pb-4 pt-5 bg-light">
      <div class="container">
         <h6 class="mt-1 mb-0 float-right"><a href="#">View All Items</a></h6>
         <h4 class="mt-0 mb-3 text-dark font-weight-normel">Best Selling Items</h4>
         <div class="row">


            @foreach($products as $product)
            <div class="col-6 col-md-3">

               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></span>

                     <span class="badge badge-success">50% OFF</span>

                     <a href="{{route('product.view',[$product->id])}}">
                     <img src="{{ Storage::url($product->image) }}" height="350" style="width: 100%">
                     </a>

                  <div class="card-body">
                     <h6 class="card-title mb-1">{{ $product->name }}</h6>
                     <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                           class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                     </div>
                     <p class="mb-0 text-dark">${{ $product->price }} <span
                        class="text-black-50"><del>$500.00 </del></span>
                        <a href="{{route('product.view',[$product->id])}}">View</a>
                        <span
                           class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                  </div>
               </div>
            </div>
            @endforeach

         </div>
      </div>
      </div>
   </section>

   <section class="offer-product py-5">
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="offers-block"><a href="#"><img class="img-fluid" src="{{ asset('images/dressshop2.jpg')  }}" alt=""></a></div>
            </div>
            <div class="col-6">
               <div class="offers-block"><a href="#"><img class="img-fluid" src="{{ asset('images/dressshop.jpg')  }}" alt=""></a></div>
            </div>
         </div>
      </div>
   </section>



   <div class="jumbotron">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            @foreach($randomActiveProducts as $product)

            <div class="col-6 col-md-3">

                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                       <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                       <a href="{{route('product.view',[$product->id])}}">
                          <span class="badge badge-success">50% OFF</span>

                          <img src="{{ Storage::url($product->image) }}" height="350" style="width: 100%"></a>

                       <div class="card-body">
                          <h6 class="card-title mb-1">{{ $product->name }}</h6>
                          <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                          </div>
                          <p class="mb-0 text-dark">${{ $product->price }} <span class="text-black-50"><del>$500.00 </del></span> <span
                                class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                       </div>
                    </div>
                 </div>
            @endforeach

          </div>
        </div>
        <div class="carousel-item ">
          <div class="row">
            @foreach($randomItemProducts as $product)
            <div class="col-6 col-md-3">

                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                       <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                       <a href="{{route('product.view',[$product->id])}}">
                          <span class="badge badge-success">50% OFF</span>

                          <img src="{{ Storage::url($product->image) }}" height="350" style="width: 100%"></a>

                       <div class="card-body">
                          <h6 class="card-title mb-1">{{ $product->name }}</h6>
                          <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                                class="icofont icofont-star active"></i><i class="icofont icofont-star"></i> <span>613</span>
                          </div>
                          <p class="mb-0 text-dark">${{ $product->price }} <span class="text-black-50"><del>$500.00 </del></span> <span
                                class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span></p>
                       </div>
                    </div>
                 </div>





            @endforeach

          </div>
        </div>


      </div>

    </div>
      </div>
















@endsection
