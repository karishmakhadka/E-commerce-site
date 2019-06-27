@extends('index')
@section('content')
<div class="container">
<div class="row">
	<div class="col-lg-offset-5">

		<form action="{{url('enquiry_send')}}" method="POST">
			@csrf
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control" id="title"  placeholder="Insert email" name="email"> 
		  </div>

		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" placeholder="Insert name" name="name"> 
		  </div>

		  <div class="form-group">
		    <label>Message</label>
		    <textarea name="message" class="form-control"></textarea>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</div>
@endsection()