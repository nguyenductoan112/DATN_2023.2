@extends('admin.app')
@section('content')
<h1>Sửa tag</h1>
<div class="row">
  <div class="col-5">
    <form action="{{ route('admin.tag.update',$tagData->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name"value="{{ $tagData->name }}" placeholder="Enter name" name="name">
        <div id="emailHelp" class="form-text"></div>
      </div>
      
      <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="status">
          <option value="0"{{ $tagData->status ==0?'selected':'' }} >Không họat động</option>
          <option value="1"{{ $tagData->status ==1?'selected':'' }}>Họat động</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
  </div>
</div>

  
@endsection 