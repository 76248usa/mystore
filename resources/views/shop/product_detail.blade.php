@extends('layouts.product_layout')
@section('content')





      <section class="py-2  inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-12">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="#"><span class="icofont icofont-ui-home"></span> Home</a> <span class="icofont icofont-thin-right"></span> <a href="#">{{ $product->category->name }}</a> <span class="icofont icofont-thin-right"></span> <span>{{ $product->subcategory->name }}</span>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>





      <section class="py-5 shop-single bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="shop-detail-left">
                     <div class="shop-detail-slider position-relative">


                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ Storage::url($product->image) }}" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ Storage::url($product->image) }}" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ Storage::url($product->image) }}" alt="Third slide">
                                  </div>
                                </div>
                              </div>

                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="shop-detail-right">
                     <div class="border rounded shadow-sm bg-white p-4">
                        <div class="product-name">
                           <p class="text-danger text-uppercase mb-0"> <i class="icofont-sale-discount"></i> 50% Off</p>
                           <h2>{{ $product->name }}</h2></h2>
                           <span>Product code: <b>OSAHAN456</b> | <strong class="text-info">FREE Delivery</strong> on orders over $299</span>
                        </div>
                        <div class="price-box">
                           <h5>
                              <span class="product-desc-price">$145.00</span>
                              <span class="product-price text-danger">${{ $product->price }}</span>
                              <small class="text-success">You Save : $78.00</small>
                           </h5>
                        </div>

                        <div class="product-variation">
                           <form action="#" method="post">
                              <div class="mt-1 pt-2 float-left mr-2">Quantity :</div>
                              <div class="input-group quantity-input"> <span class="input-group-btn">
                                 <button type="button" class="btn btn-outline-secondary btn-number btn-lg" data-type="minus" data-field="quant[1]">
                                 <span class="fa fa-minus"></span>
                                 </button>
                                 </span>
                                 <input type="text" name="quant[1]" class="text-center form-control border-form-control form-control-sm input-number" value="1"> <span class="input-group-btn">
                                 <button type="button" class="btn btn-outline-secondary btn-number btn-lg" data-type="plus" data-field="quant[1]">
                                 <span class="fa fa-plus"></span>
                                 </button>
                                 </span>
                              </div>
                              <span class="float-right">
                              <button type="button" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Add to Wishlist" class="btn btn-outline-primary btn-lg"><i class="icofont icofont-heart"></i></button>
                              <a href = "{{ route('add.cart', [$product->id])}}">
                              <button type="button" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp; <i class="icofont icofont-shopping-cart"></i> Add To Cart &nbsp;&nbsp;&nbsp;</button></a>
                              </span>
                           </form>
                        </div>
                        <div class="short-description border-bottom">
                           <h6 class="mb-3">
                              <span class="text-dark font-weight-bold">Quick Overview</span>
                              <small class="float-right">Availability: <strong class="badge badge-danger">In Stock</strong></small>
                           </h6>
                           <p>{!! $product->description !!}</p>

                        </div>



                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>




   <div class="jumbotron">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            @foreach($productFromSameCategories as $product)

            <div class="col-6 col-md-3">

                    <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                       <span class="like-icon"><a href="#"> <i class="icofont icofont-heart"></i></a></span>
                       <a href="{{route('product.view',[$product->id])}}">
                          <span class="badge badge-success">50% OFF</span>

                          <img src="{{ Storage::url($product->image) }}" height="350" style="width: 100%">

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


