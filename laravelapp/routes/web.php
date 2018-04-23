<?php
use Illnminate\Suppor\Facades\DB;
use App\Http\Middleware\LoginMiddleware;
use App\Customer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/list', 'ShoppingController@testlist');
Route::post('test/listfind', 'ShoppingController@testlistfind');
Route::get('test/grid', 'ShoppingController@testgrid');
Route::post('test/find', 'ShoppingController@testfind');
Route::get('test/detail', 'ShoppingController@testdetail');
Route::get('test/index','ShoppingController@testindex');
Route::post('test/index','ShoppingController@testlogincheck');
Route::get('test/login','ShoppingController@testlogin');
Route::get('test/register','ShoppingController@testregister');
Route::post('test/register','ShoppingController@testcreate');
Route::get('test/faq','ShoppingController@testfaq');
Route::get('test/contact','ShoppingController@testcontact');
Route::get('test/compare','ShoppingController@testcompare');
Route::get('test/checkout','ShoppingController@testcheckout');
Route::get('test/cart','ShoppingController@testcart');
Route::post('test/cart','ShoppingController@testcartin');
Route::post('test/cartdrop','ShoppingController@testcartdrop');
Route::get('test/cartalldrop','ShoppingController@testcartalldrop');
Route::get('test/blog','ShoppingController@testblog');
Route::get('test/blog-list','ShoppingController@testbloglist');
Route::get('test/blog-detail','ShoppingController@testblogdetail');
Route::get('test/wishlist','ShoppingController@testwishlist');
Route::post('test/wishlist', 'ShoppingController@testwishin');
Route::get('test/profile','ShoppingController@testprofile');
Route::get('test/password','ShoppingController@testpassword');
Route::get('test/order','ShoppingController@testorder');
Route::get('test/address','ShoppingController@testaddress');
Route::get('test/about','ShoppingController@testabout');




Route::get('shop/login','CustomerController@login');
Route::post('shop/login','CustomerController@logincheck');
Route::post('shop/list', 'CustomerController@logincheck');
Route::post('shop/find', 'ProductController@seach');

Route::get('shop/logoutcheck','CustomerController@logoutcheck');
Route::get('shop/logout','CustomerController@logout');

Route::get('shop/list', 'ProductController@index');
Route::get('shop/pro', 'ProductController@pro');

Route::get('shop/register','CustomerController@register');
Route::post('shop/register','CustomerController@create');

Route::get('shop/edit','CustomerController@edit');
Route::post('shop/edit','CustomerController@update');

Route::post('shop/cart','ProductController@cartlist');
Route::get('shop/cart','ProductController@cartlist');
Route::get('shop/cart/drop','ProductController@drop');
Route::post('shop/cart/add','ProductController@prodrop');

Route::post('shop/fav','ProductController@fav');
Route::get('shop/fav','ProductController@fav');
Route::post('shop/fav/drop','ProductController@favdrop');
Route::get('shop/fav/drop','ProductController@favdrop');

Route::get('shop/purchase','ProductController@purchase');
Route::get('shop/sub/purchase','ProductController@subpurchase');

Route::get('shop/exit', 'ProductController@exit');

Route::get('shop/history','ProductController@history');
