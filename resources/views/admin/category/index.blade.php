@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard
                  <a href="{{route('categories.create')}}" class="pull-left"><button type="button" class="navbar-toggler"style="background-color: #ff084e">Create</button></a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Parent Id</th>
      <th scope="col">Title</th>
      <th scope="col">Detail</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($cats as $category)
    <tr class="table-active"> 
      <td>{{$i++}}</td>
      <td>

        {{$category->parent_title}}
      </td>
      <td>{{$category->title}}</td>
      <td>{{$category->detail}}</td>
      <td>
        @if($category->image)
          <img src="{{asset('/uploads/items/'.$category->image)}}" height="200" width="200"></img>
        @else
          -
        @endif
      </td>

      <td>
        <a href="{{route('categories.edit',$category->id)}}">
          <button class="navbar-toggler" style="background-color: #ff084e">Edit
          </button>
        </a>

        <form action="{{route('categories.destroy',$category->id)}}" method="POST">
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
