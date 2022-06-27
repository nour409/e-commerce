
@extends('layout.app')

@section('content')


@if (Session::has("massage"))
<div class="alert alert-success" role="alert">
 {{ Session::get("massage") }} 
 {{ Session::put("massage",null) }} 
  </div>
    
@endif
 

<form action="/editProduct" method="POST">
    @csrf
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $data->id }}" name="id"  hidden>
        
          <label for="formGroupExampleInput">Proudct Name</label>
          <input type="text" class="form-control"  id="formGroupExampleInput" value="{{ $data->product_name }}" name="Proudct_Name" placeholder="Proudct Name" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Proudct Description</label>
          
          <textarea rows="10" class="form-control" id="formGroupExampleInput2" name="Proudct_description" placeholder="Proudct Description" required>
            {{ $data->product_description }} </textarea>
        </div>

        
        <div class="form-group">
            <label for="formGroupExampleInput2">Proudct Price</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $data->product_price }}" name="Proudct_price" placeholder="Proudct Price" required>
          </div>
    
     
   <button class="btn btn-primary">Edit</button>
</form>



@endsection