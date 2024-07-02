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
        $product_info = Product::where('id','=',$request->id)->first();
        // dd($product_info);

        //cartmini
        $cart = $request->session()->get('cart');
        $cart = Arr::sort($cart);
        $total =0;
        foreach($cart as $row){
            $total+= $row['price']*$row['quantity'];
        }
        //

        return view('home.layouts_home.infoProduct',compact('product_info','cart','total'));
    }
    public function viewDetail(Request $request)
    {
        $product_info = Product::where('id','=',$request->id)->first();
        // dd($product_info);
        return response()->json($product_info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
