

@extends('layout.app')

@section('content')


<h1>Welcome to the services page </h1>
@foreach ($data as $product )

<div class="card" style="width: 18rem;">
    
    <div class="card-body">

      <h5 class="card-title"><br><a href="/show/{{ $product->id }}" >{{ $product->product_name  }}</a></h5>
      <hr>
     
      <p class="card-text">{{ $product->product_description }}</p>
            <p>price: {{$product->product_price }}</p>
   

</div>
  </div>

@endforeach

@endsection