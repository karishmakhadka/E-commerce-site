
  <div class="form-group">
    <label>Parent Id</label>
    <select class="form-control" id="parent" name="parent">
      <option value="0">select parent id</option>
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->title}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Title</label>
    <input class="form-control form-control-lg" type="text" name="title" id="title" value="{{ old('title', isset($cat) ? $cat->title : null) }}">
  </div>

   <div class="form-group">
    <label>Detail</label>
    <textarea class="form-control" id="detail" name="detail">{{ old('detail', isset($cat) ? $cat->detail : null) }}</textarea>
  </div>

  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>

  <div>
    <button type="submit">Save</button>
  </div>
  

