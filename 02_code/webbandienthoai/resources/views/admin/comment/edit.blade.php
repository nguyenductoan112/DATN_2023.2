@extends('admin.app')
@section('content')
<h1>Sửa comment</h1>
<div class="row">
  <div class="col-5">
    <form action="{{ route('admin.comment.update',$comment->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name"value="{{ $comment->id }}" placeholder="Enter name" name="name">
        <div id="emailHelp" class="form-text"></div>
      </div>

      <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
  </div>
</div>


@endsection
