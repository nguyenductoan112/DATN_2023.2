<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['product', 'user', 'admin'])->paginate(10);
        return view('admin.comment.index', compact('comments'));
    }

    // Admin/CommentController.php

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        // Update status to approved
        $comment->status = 1;
        $comment->admin_id = Auth::id(); // Assuming you store admin's ID who approved

        $comment->save();

        return redirect()->route('admin.comment.index')->with('success', 'Comment đã được phê duyệt thành công!');
    }


    // Xóa comment
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('admin.comment.index')->with('success', 'Đánh giá đã được xóa.');
    }
    public function store(Request $request, $id)
    {
        // Validate form data
        $request->validate([
            'star' => 'required|integer|min:1|max:5',
            'content' => 'required|string|max:255',
        ]);

        // Create a new comment
        $comment = new Comment();
        $comment->user_id = Auth::id(); // Assuming you are storing the authenticated user's ID
        $comment->product_id = $id; // Assuming you pass the product ID through the route or form
        $comment->star = $request->star;
        $comment->content = $request->content;
        $comment->status = 0; // Set status to 0 for pending approval

        $comment->save();

        return redirect()->route('infoProduct', ['id' => $id])->with('success', 'Đánh giá của bạn đã được gửi và đang chờ duyệt.');
    }
}
