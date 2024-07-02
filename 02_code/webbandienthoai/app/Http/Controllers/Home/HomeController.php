<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\wishlist;
use \Storage;
use Illuminate\Support\Arr;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->pagi){
            $request->session()->put('pagi', $request->pagi);
        }

        $category = Category::orderby('id','DESC')->get();
        $dataProduct = Product::orderby('id','DESC');


        if($request->keySearch){
            $br = Category::where('name','like','%'.$request->keySearch.'%')->first();
            $dataProduct = $dataProduct->where('name','like','%'.$request->keySearch.'%')->orWhere('category_id','=',$br->id);
        }
        if($request->search){
            $dataProduct = $dataProduct->where('category_id','=',$request->search);
        }
        $dataProduct = $dataProduct->paginate($request->session()->has('pagi')?$request->session()->get('pagi'):9);

        //cartmini
        $cart = $request->session()->get('cart');
        $cart = Arr::sort($cart);
        $total =0;
        foreach($cart as $row){
            $total+= $row['price']*$row['quantity'];
        }
        if(\Auth::check()){
            $wishlist = Wishlist::where('user_id','=',\Auth::user()->id)->orderby('id','DESC')->limit(4)->get();
            return view('home.layouts_home.shop',compact('dataProduct','category','cart','total','wishlist'));
        }
        // dd($dataProduct);
        // dd($request->session());
        return view('home.layouts_home.shop',compact('dataProduct','category','cart','total'));
    }
    public function wishlist($id)
    {
        $wl['product_id']=$id;
        $wl['user_id'] = \Auth::user()->id;
        Wishlist::create($wl);
        return redirect()->route('home');
    }

    public function destroyCart(Request $request)
    {
        if(count($request->session()->get('cart'))==1){
            $request->session()->forget('cart');
        }
        else{
            $cartss=[];
            foreach($request->session()->get('cart') as $key => $cart){

                if(!($request->id == $cart['id'])){
                    $cartss = Arr::prepend($cartss,$cart);
                }
            }
            $cartss = Arr::sort($cartss);
            // dd($cartss);
            $request->session()->forget('cart');
            foreach($cartss as $row){
                $request->session()->push('cart',$row);
            }
            // dd($request->session());
        }

        return redirect()->route('home');
    }
}
