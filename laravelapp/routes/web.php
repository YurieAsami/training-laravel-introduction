<?php
use Illnminate\Suppor\Facades\DB;
use App\Http\Middleware\LoginMiddleware;
use App\Customer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('shop/login','CustomerController@login');
Route::post('shop/login','CustomerController@logincheck');
Route::post('shop/list', 'CustomerController@logincheck');

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
