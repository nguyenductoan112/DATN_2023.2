@extends('admin.app')
@section('content')
<?php
  // dd($categorys)
?>
<h1>Hiển thị danh sách admin</h1>
<table  class="table">
    {{-- <table id="datatablesSimple"> --}}
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Product Name</th>
        <th scope="col">User Name</th>
        <th scope="col">Content</th>
        <th scope="col">Status</th>
        <th scope="col">Time</th>
        <th scope="col" colspan="2">Change</th>
      </tr>
    </thead>
    <tbody>

      @foreach($comment as $key => $row)
      <tr>

        <td>{{ ++$key }}</td>
        <td>{{$row->product->name}}</td>
        <td>{{$row->user->name}}</td>
        <td>{{$row->content}}</td>
        <td>{{$row->status == 0?'Chưa duyệt':$row->admin->name.' đã duyệt'}}</td>
        <td>{{$row->created_at}}</td>
        @if($row->status == 0)
        <td>

            <form action="{{ route('admin.comment.update',$row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <button type="submit" class="btn btn-danger" >Phê duyệt
                    <i class="fa fa-check"></i>
                </button>
            </form>
        </td>
        @endif
        <td>
            <form action="{{ route('admin.comment.destroy',$row->id) }}" method="post">
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
    {{ $comment->links() }}
  </div>

@endsection

