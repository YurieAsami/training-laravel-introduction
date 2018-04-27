<?php
namespace App\Http;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Customer;
use App\Favorite;
use App\Purchase;
use App\Purchase_detail;
use App\Cart;

class ShopClass
{
    public function user($data)
    {
      $id=$data->session('user')->get('id');
      $customer = Customer::where('id',$id)->first();
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
      return ['wish'=>$wish,'cart'=>$cart,'carts'=>$carts,'customer'=>$customer];
    }


}
