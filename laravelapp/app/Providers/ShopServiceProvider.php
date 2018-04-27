<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Product;
use App\Customer;
use App\Favorite;
use App\Purchase;
use App\Purchase_detail;
use App\Cart;
use Illuminate\Database\Eloquent\Model;

class ShopServiceProvider extends ServiceProvider
{
    public function boot()
    {
      //View::composer('*',function ($view){});

      View::composer(['shop','index','login','faq','detail'], function ($view){
        if($view->sort='priceup'){
          $view->with('products',$products = Product::orderBy('price','desc')->Paginate(6));
        }elseif($view->sort='price'){
          $view->with('products',$products = Product::orderBy('price','asc')->Paginate(6));
        }else{
          $view->with('products',$products = Product::Paginate(6));
        }
      });

    }


    public function register()
    {
        //
    }
}
