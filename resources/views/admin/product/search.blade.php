@extends('index')
@section('content')
	<div class="col-md-8">

        @foreach ($items as $item)

        <div class="newslist">
          
        	@if(isset($item->image))
                                <img src="{{asset('/uploads/items/'.$item->image)}}" alt="">
                            @else
                                <img src="/uploads/default.jpg" width="300" height="300">
                            @endif
           <div class="description">
           		 <h3><a href="{{$item->url}}">{{$item->title}}</a></h3>
            	<p>{!! str_limit(strip_tags($item->detail), 300) !!}</p>
          </div>

          
 
        </div>

        @endforeach 

      </div>

@endsection