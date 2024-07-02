@extends('admin.app')
@section('content')
<?php
  // dd($categorys)
?>
<h1>Hiển thị danh sách khách hàng</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">AVATAR</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Time</th>
        <!-- <th scope="col" colspan="2"><a href="{{ route('admin.user.create') }}">Thêm</a></th> -->

      </tr>
    </thead>
    <tbody>

      @foreach($user as $key => $row)
      <tr>

        <td>{{ ++$key }}</td>
        <td><img width="100px" src="{{asset('storage/'. $row->avatar) }}" alt=""></td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->created_at }}</td>
        <!-- <td><a href="{{ route('admin.user.edit',$row->id) }}">Sửa</a></td> -->
        <td>

          <form action="{{ route('admin.user.destroy',$row->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" >Xóa
              <i class="fa fa-trash"></i>
            </button>
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    {{ $user->links() }}
  </div>

@endsection
