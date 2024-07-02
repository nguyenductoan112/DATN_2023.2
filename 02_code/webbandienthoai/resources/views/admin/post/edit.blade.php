@extends('admin.app')
@section('content')
<h1>Sửa tag</h1>
<div class="row">
  <div class="col-5">
    <form action="{{ route('admin.post.update',$postData->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" value="{{ $postData->name }}" placeholder="Enter name" name="name">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="img" >img</label>
        <input type="file" class="form-control" id="img" name="image">
      </div>
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" value="{{ $postData->description }}" placeholder="Enter description" name="description">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="content">content</label>
        <input type="text" class="form-control" id="content"value="{{ $postData->content }}" placeholder="Enter content" name="content">
        <div id="emailHelp" class="form-text"></div>
      </div>
      
      <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status">
          <option value="0" {{ $postData->status==0?'selected':'' }}>Không họat động</option>
          <option value="1"{{ $postData->status==1?'selected':'' }}>Họat động</option>
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
  </div>
</div>

  
@endsection 