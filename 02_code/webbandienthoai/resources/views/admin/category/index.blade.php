@extends('admin.app')
@section('content')
<?php
  // dd($categorys)
?>
<h1>Hiển thị danh sách danh mục</h1>
<table class="table">
    {{-- <table id="datatablesSimple"> --}}
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Admin</th>
        <th scope="col">Image</th>
        <th scope="col">Time</th>
        <th scope="col" colspan="2"><a href="{{ route('admin.category.create') }}">Thêm</a></th>

      </tr>
    </thead>
    <tbody>

      @foreach($categorys as $key => $row)
      <tr>
        {{-- @dd($row->relation) --}}
        <td>{{ ++$key }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->admin->name }}</td>

        <td><img src="{{ $row->image }}" alt=""></td>
        <td>{{ $row->created_at }}</td>
        <td><a href="{{ route('admin.category.edit',$row->id) }}">Sửa</a></td>
        <td>
            <form action="{{ route('admin.category.destroy',$row->id) }}" method="post">
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
  {{$categorys->links()}}
@endsection
