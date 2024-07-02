<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
   
    public function store(Request $request,$id)
    {
        $cmt = $request->only('content','star');
        $cmt['user_id']=\Auth::user()->id;
        $cmt['status'] = 0;
        $cmt['product_id'] = $id;
        // $cmt['star'] = ;
        // dd($cmt);
        Comment::create($cmt);
        return redirect()->route('infoProduct',$id)->with('success','Comment khoản thành công');
    }
}
