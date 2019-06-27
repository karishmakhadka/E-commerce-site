@extends('index')
@section('content')
{{$category->title}}
<div class="col-md-12">
	<div class="row">
		@foreach($products as $product)
			<div class="col-md-4">
				<div class="card" style="width: 18rem; height: 400px;">
				 <img class="card-img-top" src="{{asset('uploads/items/'.$product->image)}}" height="200" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">{{$product->title}}</h5>
				    <p class="card-text">{{str_limit($product->detail,50)}}</p>
				    <a href="{{strtolower($category->title)}}/{{$product->id}}" class="btn btn-primary">Read More</a>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection()