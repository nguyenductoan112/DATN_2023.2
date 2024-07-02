@extends('admin.app')
@section('content')
<?php
  // dd($categorys)

?>
<h1>Hiển thị danh sách post</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Content</th>
        <th scope="col">View</th>
        <th scope="col">Category</th>
        <th scope="col">Status</th>
        <th scope="col">Time create</th>
        <th scope="col" colspan="2"><a href="{{ route('admin.post.create') }}">Thêm</a></th>

      </tr>
    </thead>
    <tbody>
      
      @foreach($postData as $key => $row)

      <tr>
        
        <td>{{ ++$key }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->image }}</td>
        <td>{{ $row->description }}</td>
        <td>{{ $row->content }}</td>
        <td>{{ $row->view }}</td>
        <td>{{ $row->category_id }}</td>
        <td>{{ $row->status==0?'Không hoạt động':'Hoạt động' }}</td>
        <td>{{ $row->created_at }}</td>
        <td><a href="{{ route('admin.post.edit',$row->id) }}">Sửa</a></td>
        <td>
          <form action="{{ route('admin.post.destroy',$row->id) }}" method="post">
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
@endsection