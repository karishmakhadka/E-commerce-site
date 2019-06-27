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

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="form-group">
    <label>Categories</label>
    <select class="form-control" id="category_id" name="category_id">
      @foreach($cats as $category)
      <option value="{{$category->id}}">{{$category->title}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" id="detail" name="detail"></textarea>
  </div>
  
  <div class="form-group">
    <label>Size</label>
    <select multiple class="form-control" id="size" name="size">
      <option>32</option>
      <option>33</option>
      <option>34</option>
      <option>35</option>
      <option>36</option>
    </select>
  </div>

  <div class="form-group">
    <label>Quantity</label>
    <input type="number" class="form-control-file" id="quantity" name="quantity">
  </div>

  <div class="form-group">
    <label>Price</label>
    <input type="number" class="form-control-file" id="price" name="price">
  </div>

  <div>
    <button type="submit">Save</button>
  </div>
  
</form>

</div>
</div>
</div>
</div>
</div>

@endsection