<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Bill_Detail;
use App\Models\User;
use App\Models\Product;
use \DB;


class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bill = Bill::orderby('id', 'DESC')->paginate(10);
        return view('admin.bill.index', compact('bill'));
    }
    public function indexuser(Request $request)
    {
        $bill = Bill::orderby('id', 'DESC')->where('user_id', '=', Auth::user()->id)->paginate(10);
        return view('home.layouts_home.bill', compact('bill'));
    }

    public function show(Request $request)
    {
        $billdetail = Bill_Detail::orderby('id', 'DESC')->where('bill_id', '=', $request->id)->paginate(5);
        // dd($billdetail);
        return view('home.layouts_home.billdetail', compact('billdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $bill['user_id'] = Auth::guard('web')->user()->id;
        $bill['payment'] = $request->payment;
        $bill['status'] = 0;
        $bill['shipping_address'] = $request->session()->get('shipping_address');
        $bill['ordertotal'] = $request->session()->get('ordertotal');
        $Billl = Bill::create($bill);
        $bill_detail['bill_id'] = $Billl->id;

        foreach ($request->session()->get('cart') as $row) {
            $bill_detail['product_name'] = $row['name'];
            $bill_detail['quantity'] = $row['quantity'];
            $bill_detail['image'] = $row['image'];
            $bill_detail['price'] = $row['price'];
            $bill_detail['info'] = "";
            Bill_Detail::create($bill_detail);
            $product = Product::where('id', '=', $row['id'])->first();
            Product::where('id', '=', $row['id'])->update(['sold' => ($product->sold + $row['quantity'])]);

        }


        if ($request->payment == 1) {
            return redirect()->route('home');
        } else {
            $this->vnpay($request);
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bill_detail')->where('bill_id', '=', $id)->delete();
        DB::table('bill')->where('id', '=', $id)->delete();
        return redirect()->route('billuser');
    }

    public function vnpay(Request $request)
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "https://localhost/vnpay_php/vnpay_return.php";
        $vnp_TmnCode = "SRLCAGQW";//Mã website tại VNPAY
        $vnp_HashSecret = "LVXYSRMISPXSJACLXEEZGEBAEEJWLLGY"; //Chuỗi bí mật

        $vnp_TxnRef = 1; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 1;
        $vnp_OrderType = 1;
        $vnp_Amount = ($request->session()->get('ordertotal') + 100000) * 100;
        $vnp_Locale = 'VN';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        $vnp_ExpireDate = 1;
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00'
            ,
            'message' => 'success'
            ,
            'data' => $vnp_Url
        );

        header('Location: ' . $vnp_Url);
        die();

        // vui lòng tham khảo thêm tại code demo
    }
}
