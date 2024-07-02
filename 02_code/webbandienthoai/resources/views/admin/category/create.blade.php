@extends('admin.app')
@section('content')
<h1>Tạo danh mục</h1>
<div class="row">
  <div class="col-5">
    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <!-- <div class="form-group">
        <label for="img" >img</label>
        <input type="file" class="form-control" id="img" name="image">
      </div> -->
      <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status">
          <option value="0">Không hoạt động</option>
          <option value="1">Hoạt động</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>


@endsection
