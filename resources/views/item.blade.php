

@extends('layout.app')

@section('content')





<div class="card" style="width: 18rem;">
    
    <div class="card-body">

      <h5 class="card-title"><br> >{{ $data->product_name  }}</h5>
      <hr>
      {{ $data->id }}
      <p class="card-text">{{ $data->product_description }}</p>
            <p>price: {{$data->product_price }}</p>
   

</div>
  </div>



@endsection