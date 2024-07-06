<?php

namespace App\Http\Controllers\Home;

use App\Models\Product;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class InfoProductController extends Controller
{
    public function index(Request $request)
    {
        $product_info = Product::where('id', '=', $request->id)->first();
        // dd($product_info);

        //cartmini
        $cart = $request->session()->get('cart');
        $cart = Arr::sort($cart);
        $total = 0;
        foreach ($cart as $row) {
            $total += $row['price'] * $row['quantity'];
        }

        $cmt = Comment::orderby('id', 'ASC')->where('product_id', '=', $request->id)->get();
        // dd($cmt);

        return view('home.layouts_home.infoProduct', compact('product_info', 'cart', 'total', 'cmt'));
    }
    public function viewDetail(Request $request)
    {
        $product_info = Product::where('id', '=', $request->id)->first();
        // dd($product_info);
        return response()->json($product_info);
    }

}