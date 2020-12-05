
@extends('layouts.product_layout')


@section('content')

 <div class="container">

 	<div class="row justify-content-center">
 		<div class="col-md-8">
             @foreach($carts as $cart)
            <div class="card mb-3">
 				<div class="card-body">
                     @foreach($cart->items as $item)
                     <span class="float-right">
                         <<img src="{{ Storage::url($item['image']) }}" width="100">
                     </span>
                     <p>Name: {{ $item['name'] }}<p/>
 					<p>Price: {{ $item['price'] }}</p>
                     <p>Qty: {{$item['qty']}}</p>
                     <p>
                         <button type="button" class="btn btn-success">
                             <span class="bagde badge-light">Total price: {{ $cart->totalPrice }}</span>
                         </button>

                     </p>


                     @endforeach

 					<span class="float-right">
 						<img src="" width="100">
 					</span>




 				</div>

             </div>
             @endforeach

 			<p>
 				<button type="button" class="btm btn-info" style="color: #fff;">
 					<span class="">
 						Total price:
 					</span>
 				</button>
 			</p>
 			<hr>

 		</div>
 	</div>



 </div>

 @endsection
