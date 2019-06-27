@extends('index')
@section('content')
<div class="container">
<div class="row">
	<div class="col-lg-offset-5">

	<form action="{{URL::action('FormController@update',$action->id)}}"method="POST">
			@csrf
			{{@method_PUT}}
		  <div class="form-group">
		    <label>Title</label>
		    <input type="text" class="form-control" id="title"  placeholder="Please insert title" name="title" value="{{$action->title}}"> 
		  </div>

		  <div class="form-group">
		    <label>Detail</label>
		    <textarea class="form-control" id="description" name="description" placeholder="description">{{$action->description}}</textarea>
		  </div>

		  <div class="form-group">
		    <label>Address</label>
		    <input type="text" class="form-control" id="address" name="address"  placeholder="Please insert title"> 
		  </div>

		  <div class="form-group">
      		<input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
    	  </div>

		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</div>
@endsection()