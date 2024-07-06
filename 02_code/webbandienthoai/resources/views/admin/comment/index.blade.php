@extends('admin.app')

@section('content')
<h1>Hiển thị danh sách rating & review</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Product Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
      <th scope="col">Time</th>
      <th scope="col">Browser</th>
      <!-- <th scope="col">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($comments as $key => $comment)
    <tr>
      <td>{{ ++$key }}</td>
      <td>{{ $comment->product ? $comment->product->name : 'N/A' }}</td>
      <td>{{ $comment->user ? $comment->user->name : 'N/A' }}</td>
      <td>{{ $comment->content }}</td>
      <td>
      {{ $comment->status == 0 ? 'Chưa duyệt' : ($comment->admin ? 'Đã duyệt bởi ' . $comment->admin->name : 'N/A') }}
      </td>
      <td>{{ $comment->created_at }}</td>
      <td>
      @if($comment->status == 0)
      <form action="{{ route('admin.comment.update', $comment->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <button type="submit" class="btn btn-danger">Phê duyệt <i class="fa fa-check"></i></button>
      </form>
    @else
      <button type="button" class="btn btn-success" disabled>Đã phê duyệt</button>
    @endif
      </td>
      <td>
      <form action="{{ route('admin.comment.destroy', $comment->id) }}" method="post">
        @csrf
        @method('DELETE')
        <!-- <button type="submit" class="btn btn-danger">Xóa <i class="fa fa-trash"></i></button> -->
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

<div>
  {{ $comments->links() }}
</div>
@endsection