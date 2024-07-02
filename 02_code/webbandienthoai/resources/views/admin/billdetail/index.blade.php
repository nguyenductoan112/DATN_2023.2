@extends('admin.app')
@section('content')
<?php
  // dd($categorys)
?>
<h1>Hiển thị danh sách sản phẩm</h1>
<table border="1" class="table" style="align:center;">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Product Name</th>
        <th scope="col">price</th>
        <th scope="col">Image</th>
        <th scope="col">Quantity</th>

      </tr>
    </thead>
    <tbody>

      @foreach($billdetail as $key => $row)
      <tr>
        {{-- @dd($row->relation) --}}
        <td>{{ (5*($billdetail->currentPage()-1))+(++$key) }}</td>
        <td>{{ $row->product_name }}</td>
        <td>{{ number_format($row->price).' VNĐ' }}</td>
        <td><img width="100px" src="{{asset('storage/'.$row->image)}}" alt=""></td>

        <td>{{ $row->quantity }}</td>
        {{-- hiển thị tên category từ category_id --}}
      </tr>

      @endforeach
    </tbody>
  </table>
  {{$billdetail->links()}}
@endsection
