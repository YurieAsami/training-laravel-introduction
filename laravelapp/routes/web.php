<?php
use Illnminate\Suppor\Facades\DB;
use App\Http\Middleware\LoginMiddleware;
use App\Customer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/list', 'ProductController@testlist');
Route::post('test/listfind', 'ProductController@testlistfind');
Route::get('test/grid', 'ProductController@testgrid');
Route::post('test/find', 'ProductController@testfind');
Route::get('test/detail', 'ProductController@testdetail');
Route::get('test/index','ProductController@testindex');
Route::post('test/index','ProductController@testlogincheck');
Route::get('test/login','ProductController@testlogin');
Route::get('test/register','ProductController@testregister');
Route::post('test/register','ProductController@testcreate');
Route::get('test/faq','ProductController@testfaq');
Route::get('test/contact','ProductController@testcontact');
Route::get('test/compare','ProductController@testcompare');
Route::get('test/checkout','ProductController@testcheckout');
Route::get('test/cart','ProductController@testcart');
Route::post('test/cart','ProductController@testcartin');
Route::post('test/cartdrop','ProductController@testcartdrop');
Route::get('test/cartalldrop','ProductController@testcartalldrop');
Route::get('test/blog','ProductController@testblog');
Route::get('test/blog-list','ProductController@testbloglist');
Route::get('test/blog-detail','ProductController@testblogdetail');
Route::get('test/wishlist','ProductController@testwishlist');
Route::post('test/wishlist', 'ProductController@testwishin');
Route::get('test/profile','ProductController@testprofile');
Route::get('test/password','ProductController@testpassword');
Route::get('test/order','ProductController@testorder');
Route::get('test/address','ProductController@testaddress');
Route::get('test/about','ProductController@testabout');




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
