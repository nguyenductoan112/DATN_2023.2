@extends('admin.app')
@section('content')
<h1>Tạo bài post</h1>
<div class="row">
  <div class="col-5">dsadsa
    <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="img" >img</label>
        <input type="file" class="form-control" id="img" name="image">
      </div>
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="content">content</label>
        <input type="text" class="form-control" id="content" placeholder="Enter content" name="content">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
          @foreach($categoryData as $key=>$row)
          <option value="{{ $row->id }}">{{ $row->name }}</option>
          @endforeach 
        </select>
      </div>
      <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status">
          <option value="0">Không họat động</option>
          <option value="1">Họat động</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
  </div>
</div>

  
@endsection 