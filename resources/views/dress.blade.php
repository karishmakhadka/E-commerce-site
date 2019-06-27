@extends('index')
@section('content')

@foreach($products as $product)
<a href="{{url('product/'.$product->id)}}">
<img src="{{asset('img/product/'.$product->image)}}" style="width: 300px; height: 300px;" /></a>
@endforeach()


@endsection