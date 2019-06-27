@extends('index')
@section('content')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($actions as $action)
    <tr class="table-active"> 
      <td>{{$i++}}</td>
      <td>{{$action->title}}</td>
      <td>{{$action->description}}</td>
      <td>{{$action->address}}</td>
      <td>{{$action->image}}</td>

      <td>
          <a href="{{'/form/'.$action->id.'/edit'}}"><button class="btn btn-warning">Edit</button></a>

          <form action="{{URL::action('FormController@delete',$action->id)}}"method ="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="Delete">
            <button class="btn btn-warning" type="submit">Delete</button></form>
          
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection()
