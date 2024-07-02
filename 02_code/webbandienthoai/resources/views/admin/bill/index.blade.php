@extends('admin.app')
@section('content')
<?php
  // dd($categorys)
?>
<h1>Đơn hàng</h1>
<table border ="1" class="table" style="align:center;">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Shipping address</th>
        <th scope="col">OrderTotal</th>
        <th scope="col">Payment</th>
        <th scope="col">Status</th>
        <th scope="col">Time</th>
        <th scope="col">Watch</th>

      </tr>
    </thead>
    <tbody>

      @foreach($bill as $key => $row)
      <tr>
        {{-- @dd($row->relation); --}}
        <td >{{ (10*($bill->currentPage()-1))+(++$key) }}</td>
        <td >{{$row->user->name}}</td>
        <td >{{$row->user->email}}</td>
        <td >{{$row->shipping_address}}</td>
        <td>{{ number_format($row->ordertotal).' VNĐ' }}</td>
        <td >{{ $row->payment==1?'Thanh toán khi nhận hàng':'Thanh toán qua VNPAY' }}</td>
        <td>{{$row->status==0?'Chưa thanh toán':'Đã thanh toán'}}</td>
        <td >{{ $row->created_at }}</td>
        <td><a href="{{route('admin.billdetail.index',$row->id)}}">Show</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$bill->links()}}
@endsection
