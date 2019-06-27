@extends('index')
@section('content')
<div class="col-md-12">
	<div class="row">
		<div class="col-md-5">
			<img src="{{asset('uploads/items/'.$item->image)}}" height="400" width="500">
		</div>

		<div class="col-md-4">
			<h1><b>{{$item->title}}</b></h1>
			<p>{{$item->detail}}</p>
		</div>

		<div class="col-md-3">
			
			<h3>Rs. {{$item->price}}</h3>
			<h3>Size {{$item->size}}</h3>
			<input type="number" min="1" max="{{$item->quantity}}">	
			<button type="submit" data-toggle="modal" data-target="#buyModal">Buy Now</button>

			<button type="submit" data-toggle="modal" data-target="#enquiryModal">Enquiry</button>
		</div>
	</div>
</div>

<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buy {{$item->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('purchases.store')}}" method="POST">
        	{{csrf_field()}}
        	<input type="hidden" name="item_id" value="{{$item->id}}">
        	<input type="hidden" name="max_qty" value="{{$item->quantity}}">
        	<div class="form-group">
        		<label>Username</label>
        		<input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
        	</div>
			
			<div class="form-group">
	        	<label>Email</label>
	        	<input class="form-control" type="email" name="email" id="email" placeholder="Enter Email">
        	</div>

			<div class="form-group">
	        	<label>Contact</label>
	        	<input class="form-control" type="tel" name="phone" id="phone" placeholder="Enter Contact Number">
	        </div>

			<div class="form-group">
	        	<label>Quantity (left: {{$item->quantity}})</label>
	        	<input class="form-control" name="quantity" type="text" min="1" max="{{$item->quantity}}" value="" onkeyup="multiply()" id="quantity">
	        </div>
			
			<div class="form-group">
	        	<label>Price</label>
	        	<input class="form-control" name="price" value="{{$item->price}}" onkeyup="multiply()" id="price" readonly>
	        </div>

	        <div class="form-group">
	        	<label>Total</label>
	        	<input class="form-control" name="total" id="total" readonly>
	        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>



<div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buy {{$item->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('enquries.store')}}" method="POST">
        	{{csrf_field()}}
        	<input type="hidden" name="item_id" value="{{$item->id}}">
        	<input type="hidden" name="max_qty" value="{{$item->quantity}}">
        	<div class="form-group">
        		<label>Name</label>
        		<input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
        	</div>
			
			<div class="form-group">
	        	<label>Email</label>
	        	<input class="form-control" type="email" name="email" id="email" placeholder="Enter Email">
        	</div>

			<div class="form-group">
	        	<label>Contact</label>
	        	<input class="form-control" type="tel" name="phone" id="phone" placeholder="Enter Contact Number">
	        </div>

			<div>
				<textarea name="message" id="message" placeholder="Enter Message">Message</textarea>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

<script type="text/javascript">
	function multiply(){
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;

		document.getElementById('total').value = price * quantity;
	}

</script>