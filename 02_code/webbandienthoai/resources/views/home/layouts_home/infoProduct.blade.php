<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coron-single product</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">

    <!-- all css here -->
    @include('home.layouts_home.css');
</head>

<body>
    <!-- Add your site or application content here -->

    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                <div class="header_area">
                    <!--header top-->
                    <div class="header_top" style=padding:10px 20px">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="switcher">
                                    <ul>
                                        <li class="languages"><a href="#"><img
                                                    src="{{asset('assets\img\logo\logo_cờ.jpg')}}" alt=""
                                                    style="width: 16px; height: auto;"> Việt Nam <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_languages">
                                                <li><a href="#"><img src="assets\img\logo\fontlogo.jpg" alt="">
                                                        English</a></li>
                                                <li><a href="#"><img src="assets\img\logo\fontlogo2.jpg" alt=""> French
                                                    </a></li>
                                            </ul>
                                        </li>

                                        <li class="currency"><a href="#"> Currency : VNĐ <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_currency">
                                                <!-- <li><a href="#"> Dollar (USD)</a></li>
                                                        <li><a href="#"> Euro (EUR)  </a></li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="header_links">
                                    <ul>
                                        @if(Auth::check())
                                            <li style="color:black;margin: auto; margin-right:10px; margin-left:10px;">
                                                <b>Hi, {{Auth::user()->name}}</b>
                                            </li>
                                            <li style="color:black;margin:auto; margin-right:0px; margin-left:0px;">
                                                <img width="42px" height="42px" style="border-radius: 50%;"
                                                    src="{{asset('storage/' . Auth::user()->avatar) }}" alt="">
                                            </li>
                                        @endif
                                        <li><a href="cart.html" title="My cart">My cart</a></li>

                                        @if(!Auth::check())

                                            <li><a href="{{ route('login') }}" title="Login">Login</a></li>
                                            <li><a href="{{ route('register') }}" title="Register">Register</a></li>
                                        @else
                                            <li><a href="{{route('billuser')}}" title="Bill">Bill</a></li>
                                            <li><a href="{{route('my', Auth::user()->id)}}" title="My account">My
                                                    account</a>
                                            </li>
                                            <li><a href="{{ route('userlogout') }}" title="Logout">Logout</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header top end-->

                    <!--header middel-->
                    <div class="header_middel">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="../assets\img\logo\logo1.jpg" alt=""
                                            style="width: 150px; height: auto;"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="header_right_info">
                                    <div class="search_bar">
                                        <form action="#">
                                            <input placeholder="Search..." type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="shopping_cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i>
                                            {{($cart == null) ? '0 Items' : count($cart) . ' Items'}} <i
                                                class="fa fa-angle-down"></i></a>

                                        <!--mini cart-->
                                        <div class="mini_cart">

                                            @if($cart == null)
                                                <p style="text-align:center;color:red;">Giỏ hàng trống</p>
                                            @else
                                                @foreach($cart as $row)

                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="../storage/{{$row['image']}}" alt=""></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">{{$row['name']}}</a>
                                                            <span
                                                                class="cart_price">{{number_format($row['price']) . ' VNĐ'}}</span>
                                                            <span class="quantity">Qty: {{$row['quantity']}}</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a title="Remove this item"
                                                                href="{{route('cartDestroyHome', $row['id'])}}"><i
                                                                    class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>

                                                @endforeach

                                                <div class="total_price">
                                                    <span> Total </span>
                                                    <span class="prices"> {{number_format($total) . ' VNĐ'}} </span>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="{{route('cart')}}"> Check out</a>
                                                </div>
                                            @endif
                                        </div>
                                        <!--mini cart end-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header middel end-->
                    <div class="header_bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="main_menu_inner">
                                    <div class="main_menu d-none d-lg-block">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="{{route('home')}}">Home</a>
                                                </li>
                                                <li><a href="#">blog</a>
                                                    <div class="mega_menu jewelry">
                                                        <div class="mega_items jewelry">
                                                            <ul>
                                                                <li><a href="https://cellphones.com.vn/sforum">blog
                                                                        details</a></li>
                                                                <li><a href="https://zalo.me/0386805234">ChatZalo</a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="https://www.facebook.com/groups/1023688284409097/">contact
                                                        us</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header end -->
                <!--breadcrumbs area start-->
                <div class="breadcrumbs_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_content">
                                <ul>
                                    <li><a href="{{route('home')}}">home</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>single product</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs area end-->


                <!--product wrapper start-->
                <div class="product_details">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product_tab fix">
                                <div class="product_tab_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="" role="tab"
                                                aria-controls="p_tab1" aria-selected="false"><img
                                                    src="{{asset('storage/' . $product_info->image2)}}" alt=""></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="" role="tab" aria-controls="p_tab2"
                                                aria-selected="false"><img
                                                    src="{{asset('storage/' . $product_info->image3)}}" alt=""></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="" role="tab" aria-controls="p_tab3"
                                                aria-selected="false"><img
                                                    src="{{asset('storage/' . $product_info->image4)}}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content produc_tab_c">
                                    <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                        <div class="modal_img">
                                            <a href=""><img src="{{asset('storage/' . $product_info->image)}}"
                                                    alt=""></a>
                                            <div class="img_icone">
                                                <img src="" alt="">
                                            </div>
                                            <div class="view_img">
                                                <a class="large_view" href="assets\img\product\dt.jpg"><i
                                                        class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="" alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="view_img">
                                                <a class="large_view" href="assets\img\product\product14.jpg"><i
                                                        class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                        <div class="modal_img">
                                            <a href="#"><img src="assets\img\product\product15.jpg" alt=""></a>
                                            <div class="img_icone">
                                                <img src="assets\img\cart\span-new.png" alt="">
                                            </div>
                                            <div class="view_img">
                                                <a class="large_view" href="assets\img\product\product15.jpg"> <i
                                                        class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product_d_right">
                                <h1>{{$product_info->name}}</h1>
                                <div class="product_ratting mb-10">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"> Đánh giá </a></li>
                                    </ul>
                                </div>
                                <div class="product_desc">
                                    <p>{{$product_info->info}}</p>
                                </div>

                                <div class="content_price mb-15">
                                    <span>{{number_format($product_info->price) . 'VNĐ'}}</span>
                                    <span
                                        class="old-price">{{number_format($product_info->price + 500000) . 'VNĐ'}}</span>
                                </div>
                                <div class="box_quantity mb-20">
                                    <form action="#">
                                        <label>quantity</label>
                                        <input min="0" max="100" value="1" type="number">
                                    </form>
                                    <button><a href="{{route('cartCreate', $product_info->id)}}" style="width:160px;">
                                            <i class="fa fa-shopping-cart"></i> add to cart</a></button>
                                    <a href="#" title="add to wishlist"><i class="fa fa-heart"
                                            aria-hidden="true"></i></a>
                                </div>

                                <div class="product_stock mb-20">
                                    <p>{{$product_info->quantity}} items</p>
                                    <span> In stock </span>
                                </div>
                                <div class="wishlist-share">
                                    <h4>Share on:</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--product details end-->


                <!--product info start-->
                <div class="product_d_info">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">
                                <div class="product_info_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#info" role="tab"
                                                aria-controls="info" aria-selected="false">More info</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                                aria-selected="false">Data sheet</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                                aria-selected="false">Reviews</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel">
                                        <div class="product_info_content">
                                            <p>{{$product_info->info_detail}}</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="sheet" role="tabpanel">
                                        <div class="product_d_table">
                                            <form action="#">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="first_child">Màn Hình</td>
                                                            <td>6.7 inch, OLED, Super Retina XDR, 2796 x 1290 Pixels
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">RAM</td>
                                                            <td>8 GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">CPU</td>
                                                            <td>A17 Pro</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Dung lượng pin</td>
                                                            <td>29 giờ</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Bộ nhớ trong</td>
                                                            <td>256GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="first_child">Xuất xứ</td>
                                                            <td>Trung Quốc</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>{{$product_info->info}}</p>
                                            <p>{{$product_info->info_detail}}</p>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="product_info_inner">
                                            <!-- Example review -->
                                            <div class="product_ratting mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                                <strong>Postthemes</strong>
                                                <p>07/06/2024</p>
                                            </div>
                                            <div class="product_demo">
                                                <strong>demo</strong>
                                                <p>Rất tốt, cảm ơn!</p>
                                            </div>
                                        </div>


                                        @foreach($cmt as $cm)
                                            @if($cm->status == 1)
                                                <div class="product_info_inner">
                                                    <div class="product_ratting mb-10">
                                                        <ul>
                                                            @for($i = 0; $i < $cm->star; $i++)
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            @endfor
                                                        </ul>
                                                        <strong>{{$cm->user->name}}</strong>
                                                        <p>{{$cm->created_at->format('d/m/Y')}}</p>

                                                    </div>
                                                    <div class="product_demo">
                                                        <strong>{{$cm->user->name}}</strong>
                                                        <p>{{$cm->content}}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                        @if(\Auth::check())
                                            <div class="product_review_form">
                                                <form action="{{route('comment', $product_info->id)}}" method="POST">

                                                    @csrf
                                                    <h2>Thêm đánh giá </h2>
                                                    <select name="star" id="">
                                                        <option value="1">1 sao<i class="fa fa-star"></i></option>
                                                        <option value="2">2 sao<i class="fa fa-star"></i></option>
                                                        <option value="3">3 sao<i class="fa fa-star"></i></option>
                                                        <option value="4">4 sao<i class="fa fa-star"></i></option>
                                                        <option value="5">5 sao<i class="fa fa-star"></i></option>
                                                    </select>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">Đánh giá của bạn </label>
                                                            <textarea name="content" id="review_comment"
                                                                required></textarea>

                                                        </div>
                                                    </div>
                                                    <button type="submit">Submit</button>
                                                </form>
                                            </div>
                                        @else
                                            <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để thêm đánh giá.</p>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--pos page end-->

    <!--footer area start-->
    <div class="footer_area">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>About us</h3>
                            <p>CellPhonS - your ultimate destination for mobile phones. From the latest models to
                                budget-friendly options, with a user-friendly interface and dedicated customer service.
                                Explore today!</p>
                            <div class="footer_widget_contect">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Số 10, P. Tạ Quang Bửu, Bách
                                    Khoa, Hai Bà Trưng, Hà Nội</p>

                                <p><i class="fa fa-mobile" aria-hidden="true"></i>(084) 386805234</p>
                                <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    toan.nd193136@sis.hust.edu.vn </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>My Account</h3>
                            <ul>
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">My orders</a></li>
                                <li><a href="#">My credit slips</a></li>
                                <li><a href="#">My addresses</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>Informations</h3>
                            <ul>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Our store(s)!</a></li>
                                <li><a href="#">My credit slips</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">About us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>extras</h3>
                            <ul>
                                <li><a href="#"> Brands</a></li>
                                <li><a href="#"> Gift Vouchers </a></li>
                                <li><a href="#"> Affiliates </a></li>
                                <li><a href="#"> Specials </a></li>
                                <li><a href="#"> Privacy policy </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <ul>
                                <li><a href="#"> about us </a></li>
                                <li><a href="#"> Customer Service </a></li>
                                <li><a href="#"> Privacy Policy </a></li>
                            </ul>
                            <p>Copyright &copy; 2024 <a href="#">CellPhoneS</a>. All rights reserved. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_social text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"
                                            aria-hidden="true"></i></a></li>

                                <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->


    <!-- modal area start -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets\img\product\product13.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets\img\product\product14.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets\img\product\product15.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="assets\img\cart\cart17.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="assets\img\cart\cart18.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="assets\img\cart\cart19.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal area end -->



    <!-- all js here -->
    @include('home.layouts_home.js');
</body>

</html>