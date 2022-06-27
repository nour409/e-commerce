
@extends('layout.app')

@section('content')



 

<form action="/createPost" method="POST">
    @csrf

        <div class="form-group">
          <label for="formGroupExampleInput">Proudct Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="Proudct_Name" placeholder="Proudct Name" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Proudct Description</label>
          
          <textarea rows="10" class="form-control" id="formGroupExampleInput2" name="Proudct_description" placeholder="Proudct Description" required>
       </textarea>
        </div>

        
        <div class="form-group">
            <label for="formGroupExampleInput2">Proudct Price</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="Proudct_price" placeholder="Proudct Price" required>
          </div>
     <button class="btn btn-primary">submit</button>
   
</form>



@endsection