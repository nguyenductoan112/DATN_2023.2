<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $total =0;
        foreach(session()->get('cart') as $row){
            $total+= $row['price']*$row['quantity'];
        }
        $cart = $request->session()->get('cart');
        $cart = Arr::sort($cart);
        return view('home.layouts_home.checkout',compact('total','cart'));
    }

    public function create(Request $request)
    {
     
        $c = $_POST['check_method'];
        $s =$_POST['shipping_address'];
        $request->session()->put('ordertotal',$_POST['ordertotal']);
        $request->session()->put('shipping_address',$s);
        // $request->session()->forget('cart');
        return redirect()->route('billCreate',$c)->with('success','Đăng ký thành công');
    }

}
