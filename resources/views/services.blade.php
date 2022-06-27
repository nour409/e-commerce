

@extends('layout.app')

@section('content')


<h1>Welcome to the services page </h1>
@if (Session::has("massage"))
<div class="alert alert-danger" role="alert">
 {{ Session::get("massage") }} 
 {{ Session::put("massage",null) }} 
  </div>
    
@endif
<div class="row">
@foreach ($data as $product )

<div class="card col-3 " style="width: 18rem; margin:5px">

    

  
    <div class="card-body">

      <h5 class="card-title"><br><a href="/show/{{ $product->id }}" >{{ $product->product_name  }}</a></h5>
      <hr>
     
      <p class="card-text">{{ $product->product_description }}</p>
            <p>price: {{$product->product_price }}</p>
   <a href="/edit/{{ $product->id }}" class="btn btn-success">edit</a>
<a href="/delete/{{ $product->id }}" class="btn btn-danger">delete</a>
</div>
  </div>

@endforeach
</div>  

@endsection