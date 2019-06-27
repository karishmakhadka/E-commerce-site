@extends('index')
@section('content')

<div class="container">
	<h2>{{$product->title}}</h2>
	<div class="row">
		<div class="col-sm-6">
			<img src="{{asset('img/product/'.$product->image)}}" alt="">

		</div>
		<div class="col-sm-6">
			{{$product->detail}}

		</div>
	</div>
</div>
<a href="/form"><button type="button" class="btn btn-info">Enquiry</button></a>



@endsection