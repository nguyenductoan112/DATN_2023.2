@extends('admin.app')
@section('content')
<h1>Tạo thẻ</h1>
<div class="row">
  <div class="col-5">dsadsa
    <form action="{{ route('admin.tag.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        <div id="emailHelp" class="form-text"></div>
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