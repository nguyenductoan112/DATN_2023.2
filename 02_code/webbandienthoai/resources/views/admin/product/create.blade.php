@extends('admin.app')
@section('content')
<h1>Thêm mới sản phẩm</h1>
<div class="row">
  <div class="col-5">
    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
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
        <textarea class="form-control" id="info" name="info" placeholder="Enter info" rows="4"
          style="font-size: 18px;"></textarea>
      </div>
      <div class="form-group">
        <label for="info_detail">Info Detail</label>
        <textarea class="form-control" id="info_detail" name="info_detail" placeholder="Enter info detail" rows="4"
          style="font-size: 18px;"></textarea>
      </div>
      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity">
      </div>
      <div class="form-group col-10">
        <label for="category_id">Category</label>
        <select style="width:129px;" name="category" id="category_id">
          @foreach($category as $row)
        <option value="{{$row->id}}">{{$row->name}}</option>
      @endforeach
        </select>

        <label style="margin-left: 100px;" for="status">Status</label>
        <select name="status" id="status">
          <option value="0">Cũ</option>
          <option value="1">Mới</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>


@endsection