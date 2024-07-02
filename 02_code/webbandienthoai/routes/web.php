<?php

use Illuminate\Support\Facades\Route;

/*
Web Routes
*/
Route::get('/home', 'Home\HomeController@index')->name('home');
Route::get('/infoProduct/{id}', 'Home\InfoProductController@index')->name('infoProduct');
Route::get('/viewDetail', 'Home\InfoProductController@viewDetail')->name('viewDetail');
Route::get('/cart', 'Home\CartController@index')->name('cart');
Route::get('/cartCreate/{id}', 'Home\CartController@create')->name('cartCreate');
Route::get('/cartDestroy/{id}', 'Home\CartController@destroy')->name('cartDestroy');
Route::get('/cartDestroyHome/{id}', 'Home\HomeController@destroyCart')->name('cartDestroyHome');
Route::get('/upCart/{id}', 'Home\CartController@up')->name('upCart');
Route::get('/lowCart/{id}', 'Home\CartController@low')->name('lowCart');
Route::get('/commentCreate/{id}', 'Home\InfoProductController@createComment')->name('commentCreate');
Route::get('/myAccount', 'Home\myAccountController@index')->name('myAccount');

Route::middleware('adminMiddleware')->get('checkout', 'Home\CheckoutController@index')->name('checkout');
Route::get('/vnpay', 'Home\paymentController@vnpay')->name('vnpay');
Route::post('/thanhtoan', 'Home\CheckoutController@create')->name('thanhtoan');

Route::get('/billCreate/{payment}', 'Admin\BillController@create')->name('billCreate');
Route::get('/bill', 'Admin\BillController@indexuser')->name('billuser');
Route::get('billdetail/{id}', 'Admin\BillController@show')->name('billdetail');
Route::get('billdelete/{id}', 'Admin\BillController@destroy')->name('billdelete');

Route::get('my/{id}', 'Admin\UserController@my')->name('my');
Route::put('myupdate/{id}', 'Admin\UserController@myupdate')->name('myupdate');

Route::get('/comment/{id}', 'Home\CommentController@store')->name('comment');

Route::get('wishlist/{id}', 'Home\HomeController@wishlist')->name('wishlist');

// Route::group([
//     'middleware' => 'adminMiddleware'],
//     function(){
//         Route::get('checkout', 'Home\CheckoutController@index')->name('checkout');
//     }
// );


Route::get('/admin', function () {
    return view('admin.app');
});
// admin/category
Route::group(
    [
        'prefix' => '/admin/',
        'namespace' => 'Admin',
        'as' => 'admin.',
        'middleware' => 'adminMiddleware'
    ],

    function () {

        Route::get('category/create', 'CategoryController@create')->name('category.create');
        Route::post('category/store', 'CategoryController@store')->name('category.store');
        Route::get('category', 'CategoryController@index')->name('category.index');
        Route::get('category/{id}/edit', 'CategoryController@edit')->name('category.edit');
        Route::put('category/{id}/update', 'CategoryController@update')->name('category.update');
        Route::delete('category/{id}/destroy', 'CategoryController@destroy')->name('category.destroy');

        Route::resource('tag', 'TagController')->except('show');
        Route::resource('post', 'PostController');
        Route::resource('admin', 'AdminController')->except('show');
        Route::resource('user', 'UserController');
        Route::resource('product', 'ProductController');
        Route::resource('bill', 'BillController');
        Route::get('billdetail/{id}', 'BillDetailController@index')->name('billdetail.index');











    }
);


Route::group(
    [
        'prefix' => '',
        'namespace' => 'Admin',
        'as' => ''
    ],

    function () {
        Route::get('login', 'AuthController@login')->name('login');
        Route::post('login', 'AuthController@plogin')->name('p.login');
        Route::get('register', 'AuthController@register')->name('register');
        Route::post('register', 'AuthController@store')->name('p.register');

        Route::get('logout', 'AuthController@logout')->name('logout');
        Route::get('userlogout', 'AuthController@userlogout')->name('userlogout');
    }
);
Route::get('/abc', function () {
    $admin = [
        'name' => 'Nguyễn Xuân Tâm',
        'age' => 20,
    ];
    return response()->json($admin);
    //echo json_encode($admin)

})->name('abc_name');

Route::get('api_abc', function () {
    return view('abc');
});

Route::get('search', 'Admin\ProductController@search')->name('province.search');
