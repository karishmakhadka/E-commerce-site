@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
<table class="table table-hover">
  <thead>

    <a href="{{route('products.create')}}"><button type="button" class="navbar-toggler" style="background-color: #ff084e">Create</button></a>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Detail</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Size</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($items as $item)
    <tr class="table-active"> 
      <td>{{$i++}}</td>
      <td>{{$item->title}}</td>
      <td><img src="{{asset('/uploads/items/'.$item->image)}}" height="200" width="200"></img></td>
      <td>{{$item->detail}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->size}}</td>
  
      
      <td>
        <a href="{{route('products.edit',$item->id)}}">
          <button class="navbar-toggler" style="background-color: #ff084e">Edit
          </button>
        </a>

        <form action="{{route('products.destroy',$item->id)}}" method="POST">
          {{csrf_field()}}
            <input type="hidden" name="_method" value="Delete">
            <button class="navbar-toggler" type="submit" style="background-color: #ff084e" onclick="return confirm('Are you sure you want to delete?');">Delete</button></form>
        </form>

      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>


</div>
            </div>  
        </div>
    </div>
</div>
@endsection()
