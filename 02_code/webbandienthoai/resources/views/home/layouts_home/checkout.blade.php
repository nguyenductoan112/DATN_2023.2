<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coron-checkout</title>
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
                                        <li class="languages"><a href="#"><img src="assets\img\logo\logo_cờ.jpg" alt=""
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
                                        <li><a href="{{route('cart')}}" title="My cart">My cart</a></li>

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
                                                            <a href="#"><img src="storage/{{$row['image']}}" alt=""></a>
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
                                                {{-- <div class="shipping_price">
                                                    <span> Shipping </span>
                                                    <span> $7.00 </span>
                                                </div> --}}
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
<<<<<<< HEAD
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
                                                                <!-- <li><a href="blog-sidebar.html">blog sidebar</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="https://www.facebook.com/groups/1023688284409097/">contact
                                                        us</a></li>
=======
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>About us</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="footer_widget_contect">
                                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>  63 LE VAN LUONG, THANH XUAN, HA NOI</p>
>>>>>>> 3f99687bd7c77520566f1ff5945bef34f7c83874

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mobile-menu d-lg-none">
                                        <nav>
                                            <ul>
                                                <li><a href="#">Home</a>
                                                    <div>
                                                        <div>
                                                            <ul>
                                                                <li><a href="#">Home 1</a></li>
                                                                <li><a href="index-2.html">Home 2</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="shop.html">shop</a>
                                                    <div>
                                                        <div>
                                                            <ul>
                                                                <li><a href="shop-list.html">shop list</a></li>
                                                                <li><a href="shop-fullwidth.html">shop Full Width
                                                                        Grid</a></li>
                                                                <li><a href="shop-fullwidth-list.html">shop Full Width
                                                                        list</a></li>
                                                                <li><a href="shop-sidebar.html">shop Right Sidebar</a>
                                                                </li>
                                                                <li><a href="shop-sidebar-list.html">shop list Right
                                                                        Sidebar</a></li>
                                                                <li><a href="single-product.html">Product Details</a>
                                                                </li>
                                                                <li><a href="single-product-sidebar.html">Product
                                                                        sidebar</a></li>
                                                                <li><a href="single-product-video.html">Product Details
                                                                        video</a></li>
                                                                <li><a href="single-product-gallery.html">Product
                                                                        Details Gallery</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">women</a>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <h3><a href="#">Accessories</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Cocktai</a></li>
                                                                    <li><a href="#">day</a></li>
                                                                    <li><a href="#">Evening</a></li>
                                                                    <li><a href="#">Sundresses</a></li>
                                                                    <li><a href="#">Belts</a></li>
                                                                    <li><a href="#">Sweets</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">HandBags</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Accessories</a></li>
                                                                    <li><a href="#">Hats and Gloves</a></li>
                                                                    <li><a href="#">Lifestyle</a></li>
                                                                    <li><a href="#">Bras</a></li>
                                                                    <li><a href="#">Scarves</a></li>
                                                                    <li><a href="#">Small Leathers</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">Tops</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Evening</a></li>
                                                                    <li><a href="#">Long Sleeved</a></li>
                                                                    <li><a href="#">Shrot Sleeved</a></li>
                                                                    <li><a href="#">Tanks and Camis</a></li>
                                                                    <li><a href="#">Sleeveless</a></li>
                                                                    <li><a href="#">Sleeveless</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div>
                                                                <a href="#"><img src="assets\img\banner\banner1.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div>
                                                                <a href="#"><img src="assets\img\banner\banner2.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">men</a>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <h3><a href="#">Rings</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Platinum Rings</a></li>
                                                                    <li><a href="#">Gold Ring</a></li>
                                                                    <li><a href="#">Silver Ring</a></li>
                                                                    <li><a href="#">Tungsten Ring</a></li>
                                                                    <li><a href="#">Sweets</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">Bands</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Platinum Bands</a></li>
                                                                    <li><a href="#">Gold Bands</a></li>
                                                                    <li><a href="#">Silver Bands</a></li>
                                                                    <li><a href="#">Silver Bands</a></li>
                                                                    <li><a href="#">Sweets</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <a href="#"><img src="assets\img\banner\banner3.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li><a href="#">pages</a>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <h3><a href="#">Column1</a></h3>
                                                                <ul>
                                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                                    <li><a href="portfolio-details.html">single
                                                                            portfolio </a></li>
                                                                    <li><a href="about.html">About Us </a></li>
                                                                    <li><a href="about-2.html">About Us 2</a></li>
                                                                    <li><a href="services.html">Service </a></li>
                                                                    <li><a href="my-account.html">my account </a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">Column2</a></h3>
                                                                <ul>
                                                                    <li><a href="#">Blog </a></li>
                                                                    <li><a href="blog-details.html">Blog Details </a>
                                                                    </li>
                                                                    <li><a href="blog-fullwidth.html">Blog FullWidth</a>
                                                                    </li>
                                                                    <li><a href="blog-sidebar.html">Blog Sidebar</a>
                                                                    </li>
                                                                    <li><a href="faq.html">Frequently Questions</a></li>
                                                                    <li><a href="404.html">404</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h3><a href="#">Column3</a></h3>
                                                                <ul>
                                                                    <li><a href="contact.html">Contact</a></li>
                                                                    <li><a href="cart.html">cart</a></li>
                                                                    <li><a href="checkout.html">Checkout </a></li>
                                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                                    <li><a href="login.html">Login</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li><a href="#">blog</a>
                                                    <div>
                                                        <div>
                                                            <ul>
                                                                <li><a href="https://cellphones.com.vn/sforum">blog
                                                                        details</a></li>
                                                                <li><a href="https://zalo.me/0386805234">ChatZalo</a>
                                                                </li>
                                                                <!-- <li><a href="blog-sidebar.html">blog sidebar</a></li> -->
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
                                    <li><a href="#">home</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>checkout</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs area end-->


                <!--Checkout page section-->
                <div class="Checkout_section">
                    <div class="checkout_form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <form action="{{route('thanhtoan')}}" method="post">
                                    @csrf
                                    <h3>Chi tiết thanh toán</h3>
                                    <div class="row">

                                        <div class="col-12 mb-30">
                                            <label>Full Name <span>*</span></label>
                                            <input type="text" name="name" value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label>Phone<span>*</span></label>
                                            <input type="text" name="phone" value="{{Auth::user()->phone}}">

                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label> Email Address <span>*</span></label>
                                            <input type="text" name="email" value="{{Auth::user()->email}}">
                                        </div>
                                        <div class="col-12 mb-30">
                                            <label>Company Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-30">
                                            <label for="country">country <span>*</span></label>
                                            <select name="cuntry" id="country">
                                                <option value="2">Việt Nam</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Ghana</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Bahrain</option>
                                                <option value="8">Colombia</option>
                                                <option value="9">Dominican Republic</option>

                                            </select>
                                        </div>

                                        <div class="col-12 mb-30">
                                            <label>Shipping address <span>*</span></label>
                                            <input placeholder="Số nhà, đường/phố, quận, huyện" type="text"
                                                name="shipping_address" value="{{auth::user()->address}}">
                                        </div>

                                        <div class="col-12">
                                            <div class="order-notes">
                                                <label for="order_note">Order Notes</label>
                                                <textarea id="order_note"
                                                    placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng."></textarea>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="col-lg-6 col-md-6">


                                <h3>Đơn hàng của bạn</h3>
                                <div class="order_table table-responsive mb-30">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(session()->get('cart') as $cart)
                                                <tr>
                                                    <td> {{$cart['name']}} <strong> × {{$cart['quantity']}}</strong></td>
                                                    <td> {{number_format($cart['price'] * $cart['quantity']) . ' VNĐ'}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tổng tiền giỏ hàng</th>
                                                <td><strong>{{number_format($total) . ' VNĐ'}}</strong></td>
                                            </tr>
                                            <tr>
                                                <th>Phí giao hàng</th>
                                                <td><strong>100,000 VNĐ</strong></td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Tổng tiền đơn hàng</th>
                                                <td><strong>{{number_format($total + 100000) . ' VNĐ'}}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <input type="hidden" name="ordertotal" value="{{$total}}">
                                </div>
                                <div class="payment_method">
                                    <div class="panel-default">
                                        <input id="payment" name="check_method" type="radio" value="1"
                                            data-target="createp_account">
                                        <label for="payment" data-toggle="collapse" data-target="#method"
                                            aria-controls="method">Thanh toán khi nhận hàng</label>
                                        <div id="method" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Vui lòng gửi đến Tên cửa hàng, Phố cửa hàng, Thị trấn cửa hàng, Cửa
                                                    hàng
                                                    Quận, huyện mã bưu điện cửa hàng.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <input id="payment_defult" name="check_method" type="radio" value="2"
                                            data-target="createp_account">
                                        <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult"
                                            aria-controls="collapsedefult">VN Pay <img src="assets\img\visha\papyel.png"
                                                alt=""></label>

                                        <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Pay via Vnpay; you can pay with your credit card if you don’t have a
                                                    Vnpay account.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order_button">
                                        <button type="submit" name="redirect">Tạo hóa đơn</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Checkout page section end-->

            </div>
            <!--pos page inner end-->
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
                            <p>Introducing CellPhonS, your ultimate destination for all things mobile. We pride
                                ourselves on offering a wide range of smartphones, from the latest models to
                                budget-friendly options, ensuring there's something for everyone. Browse through our
                                user-friendly interface to discover cutting-edge technology, competitive prices, and
                                exceptional customer service. Join the CellPhonS community today and experience the
                                convenience of shopping for your next mobile device hassle-free!</p>
                            <div class="footer_widget_contect">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Số 10, P. Tạ Quang Bửu, Bách
                                    Khoa, Hai Bà Trưng, Hà Nội</p>

                                <p><i class="fa fa-mobile" aria-hidden="true"></i> (084) 386805234</p>
                                <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> nguyenductoan@gmail.com
                                </a>
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






    <!-- all js here -->
    @include('home.layouts_home.js');
</body>

</html>