<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use App\Product;
use App\Customer;
use App\Favorite;
use App\Purchase;
use App\Purchase_detail;
use App\Cart;
use Illuminate\Database\Eloquent\Model;

class ShopComposer
{
   public function compose(View $view)
   {
     $id=$view->session('user')->get('id');
     $view->with('wish',$wish=Favorite::where('customer_id',$id)->count());
     $view->with('cart',$cart=Cart::where('customer_id',$id)->count());
     $view->with('carts',$carts=Cart::where('customer_id',$id)->get());
   }

}
