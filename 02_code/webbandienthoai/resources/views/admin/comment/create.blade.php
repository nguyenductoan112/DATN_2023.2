@extends('admin.app')
@section('content')
<h1>Tạo thẻ</h1>
<div class="row">
  <div class="col-5">
    <form action="{{ route('admin.admin.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="name">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="name">Avatar</label>
        <input type="file" class="form-control" id="avatar" placeholder="Enter avatar" name="avatar">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="form-group">
        <label for="name">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <button type="submit" class="btn btn-primary">Tạo</button>
    </form>
  </div>
</div>

  
@endsection 