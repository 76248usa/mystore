@extends('layouts.app')

@section('content')
<div class="container">
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <h2>Category</h2>
  @foreach(App\Category::all() as $cat)
    <a href="{{ route('product.list', [$cat->slug]) }}">
    <button class="btn btn-secondary">{{ $cat->name }}</button></a>

  @endforeach

  <div class="album py-5 bg-light">
    <div class="container">
        <h2>Products</h2>


        <div class="row">

        @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <img src="{{ Storage::url($product->image) }}" height="200" style="width: 100%">

            <div class="card-body">
                <p><b>{{ $product->name }}</b></p>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href = "{{ route('add.cart', [$product->id])}}"><button type="button" class="btn btn-sm btn-outline-success">Add to cart</button></a>
                  <a href="{{route('product.view',[$product->id])}}">
                  <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                </div></a>
                <small class="text-muted">${{ $product->price }}</small>
              </div>
            </div>
          </div>


        </div>
        @endforeach



      </div>
    </div>
  </div>

  <h1>Carousel</h1>


  <div class="jumbotron">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            @foreach($randomActiveProducts as $product)
            <div class="col-4">
                        <div class="card mb-4 shadow-sm">
                                <a href="{{route('product.view',[$product->id])}}">
                <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%">
                                </a>
                <div class="card-body">
                    <p><b>{{$product->name}}</b></p>
                  <p class="card-text">
                      {!! ( Str::limit($product->description,120)) !!}
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="{{route('product.view',[$product->id])}}">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                    </a>

                <a href = "{{ route('add.cart', [$product->id])}}">  <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button></<a>
                </a>
                    </div>
                    <small class="text-muted">${{$product->price}}</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        <div class="carousel-item ">
          <div class="row">
            @foreach($randomItemProducts as $product)

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
                            <a href="{{route('product.view',[$product->id])}}">  <button type="button" class="btn btn-sm btn-outline-success">View</button></a>
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
<center>
    <a href="{{ route('more.product') }}"></a><button class="btn btn-success">More Products</button></a>
</center>

      </div>

    </div>
      </div>














</main>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
</div>
@endsection










