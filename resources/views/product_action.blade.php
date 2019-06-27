
@extends('index')
@section('content')
<a href="{{route('product_form.create')}}">Create</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Title</th>
      <th scope="col">Detail</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($products as $product)
    <tr class="table-active"> 
      <td>{{$i++}}</td>
      <td>{{$product->title}}</td>
      <td>{{$product->detail}}</td>
      <td><img src="{{asset('img/product/'.$product->image)}}"></td>


      <td>
        <a href="{{route('product_form.edit',$product->id)}}">Edit</a>
        
        <form action="{{route('product_form.destroy',$product->id)}}"method ="POST">
            {{csrf_field()}}

            <input type="hidden" name="_method" value="Delete">
            <button class="btn btn-warning" type="submit">Delete</button>
          </form>
      
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection()
