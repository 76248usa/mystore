


@extends('layouts.app')

@section('content')


<div class="container">



<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
			<section class="gallery-wrap">
                @if($product)
			<div class="img-big-wrap">
			  <div>
                    <img src="
                    {{ Storage::url($product->image) }}">

			  </div>
			</div>

			</section>
		</aside>



		<aside class="col-sm-7">
			<section class="card-body p-5">
				<h3 class="title mb-3">{{ $product->name }}</h3>

<p class="price-detail-wrap">
	<span class="price h3 text-danger">
		<span class="currency">US $</span>{{ $product->price }}
	</span>

</p> <!-- price-detail-wrap .// -->
  <h3>Description</h3>
  <p>{!! $product->description !!}</p>
  <h3>Additional information</h3>
  <p>{!! $product->additional_info !!}</p>


<hr>
@endif

<a href = "{{ route('add.cart', [$product->id])}}">  <button type="button" class="btn btn-outline-primary">Add to cart</button></<a>
    </a>



</section>
        </aside>

	</div>
</div>
@if($productFromSameCategories)
<div class="jumbotron">
    <h3>You may also like</h3>
    <div class="row">
        @foreach($productFromSameCategories as $product)

        <div class="col-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {!! (Str::limit($product->description,120)) !!}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{ route('product.view', [$product->id]) }}">  <button type="button" class="btn btn-sm btn-outline-success">View</button></a>

                        <a href="{{ route('add.cart', [$product->id])}}">
                <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button></a>
                </div>
                <small class="text-muted">${{$product->price}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endif
</div>

@endsection
