@extends('admin.app')
@section('content')
<h1>Tạo danh mục</h1>
<div class="row">
  <div class="col-5">
    <form action="{{ route('admin.category.update',$category->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name"value="{{ $category->name }}" placeholder="Enter name" name="name">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="img" >img</label>
        <input type="file" class="form-control" id="img" name="image">
        <img src="{{ $category->image }}" alt="">
      </div>
      <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status">
          <option value="0"{{ $category->status ==0?'selected':'' }} >Không hoạt động</option>
          <option value="1"{{ $category->status ==1?'selected':'' }}>Hoạt động</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
  </div>
</div>

  
@endsection 