@extends('admin.app')
@section('content')
<br?php // dd($categorys) ?>
  <h1>Hiển thị danh sách sản phẩm</h1>
  <table border="1" class="table" style="align:center;">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">price</th>
        <th scope="col">Image</th>
        <!-- <th scope="col">Image2</th>
      <th scope="col">Image3</th>
      <th scope="col">Image4</th> -->
        <th scope="col">Info</th>
        <th scope="col">Info Detail</th>
        <th scope="col">Quantity</th>
        <th scope="col">Sold</th>
        <th scope="col">Category</th>
        <th scope="col">Status</th>
        <!-- <th scope="col">Admin</th> -->
        <th scope="col">Time create</th>
        <th scope="col" colspan="2"><a href="{{ route('admin.product.create') }}">Thêm</a></th>

      </tr>
    </thead>
    <tbody>

      @foreach($product as $key => $row)
      <tr>
      {{-- @dd($row->relation) --}}
      <td rowspan="2">{{ (5 * ($product->currentPage() - 1)) + (++$key) }}</td>
      <td rowspan="2">{{ $row->name }}</td>
      <td rowspan="2">{{ number_format($row->price) . ' VNĐ' }}</td>
      <td rowspan="2">
        <img width="50px" src="{{asset('storage/' . $row->image)}}" alt=""></br></br>
        <!-- <img width="50px" src="{{asset('storage/' . $row->image2)}}" alt=""></br></br>
      <img width="50px" src="{{asset('storage/' . $row->image3)}}" alt=""></br></br>
      <img width="50px" src="{{asset('storage/' . $row->image4)}}" alt=""> -->
      </td>
      <td rowspan="2">{{ Str::limit($row->info, 60) }}</td>
      <td rowspan="2">{{ Str::limit($row->info_detail, 60) }}</td>
      <td>{{ $row->quantity }}</td>
      <td>{{ $row->sold }}</td>
      {{-- hiển thị tên category từ category_id --}}
      <td rowspan="2">{{ $row->category->name }}</td>
      <td rowspan="2">{{ $row->status ? 'Mới' : 'Cũ' }}</td>
      <!-- <td rowspan="2">{{ $row->admin->name }}</td> -->
      <td rowspan="2">{{ $row->created_at }}</td>
      <td rowspan="2"><a href="{{ route('admin.product.edit', $row->id) }}">Sửa</a></td>
      <td rowspan="2">
        <form action="{{ route('admin.product.destroy', $row->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa
          <i class="fa fa-trash"></i>
        </button>
        </form>
      </td>
      </tr>
      <tr>
      <td colspan="2">{{($row->quantity) - ($row->sold)}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{$product->links()}}
  @endsection