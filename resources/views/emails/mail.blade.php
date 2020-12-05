<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>


<h2>Thank you for your purchase from Elle</h2>


<div class="container">
    <div class="jumbotron">
      <h1>Elle Websites</h1>
      <p>Thank you for your purchase.</p>
    </div>
    <p>Hope you enjoy the product!</p>

  </div>

<table class="table table-striped">
    <thead>

      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Qty</th>
      </tr>
    </thead>
    <tbody>
      @php $i=1 ; @endphp
          @foreach($cart->items as $product)

      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['qty']}}</td>
      </tr>
          @endforeach
          <br>
          Total Price:{{$cart->totalPrice}}
          Please click the link to view your order.<a href="{{url('/orders')}}"> click here</a>


    </tbody>
  </table>
