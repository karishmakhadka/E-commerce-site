@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<div class="col-lg-offset-5">

		<form action="{{route('product_form.update',$product->id)}}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="PUT">

		  <div class="form-group">
		    <label>Title</label>
		    <input type="text" class="form-control" id="title"  placeholder="Please insert title" name="title" value="{{$product->title}}"> 
		  </div>

		  <div class="form-group">
		    <label>Detail</label>
		    <textarea class="form-control" id="detail" name="detail" placeholder="detail">{{$product->detail}}</textarea>
		  </div>

		  <div class="form-group">
      		<input type="file" class="form-control-file" id="image" name="image" id="exampleFormControlFile1">
    	  </div>

		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</div>

@endsection()