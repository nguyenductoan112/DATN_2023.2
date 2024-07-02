@extends('admin.app')
@section('content')
<h1>Cập nhật sản phẩm</h1>
<div class="row">
  <div class="col-5">
    <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{$product->name}}"
          name="name">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" placeholder="Enter price" value="{{$product->price}}"
          name="price">
      </div>
      <div class="form-group">
        <label for="img">img</label>
        <input type="file" class="form-control" id="img" name="image">
      </div>
      <div class="form-group">
        <label for="img2">img2</label>
        <input type="file" class="form-control" id="img2" name="image2">
      </div>
      <div class="form-group">
        <label for="img3">img3</label>
        <input type="file" class="form-control" id="img3" name="image3">
      </div>
      <div class="form-group">
        <label for="img4">img4</label>
        <input type="file" class="form-control" id="img4" name="image4">
      </div>
      <div class="form-group">
        <label for="info">Info</label>
        <input type="text" class="form-control" id="info" placeholder="Enter info" value="{{$product->info}}"
          name="info">
      </div>
      <div class="form-group">
        <label for="info_detail">Info Detail</label>
        <input type="text" class="form-control" id="info_detail" placeholder="Enter info_detail"
          value="{{$product->info_detail}}" name="info_detail">
      </div>
      <div class="form-group col-10">
        <label for="category_id">Category</label>
        <select style="width:129px;" name="category" id="category_id">
          @foreach($category as $row)
        <option value="{{$row->id}}" {{$row->id == $product->category->id ? 'selected' : ''}}>{{$row->name}}</option>
      @endforeach
        </select>

        <label style="margin-left: 100px;" for="status">Status</label>
        <select name="status" id="status">
          <option value="0" {{$product->status == 0 ? 'selected' : ''}}>Cũ</option>
          <option value="1" {{$product->status == 1 ? 'selected' : ''}}>Mới</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
  </div>
</div>


@endsection