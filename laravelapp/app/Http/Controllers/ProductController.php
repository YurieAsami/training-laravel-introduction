<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Favorite;
use App\Purchase;
use App\Purchase_detail;

class ProductController extends Controller
{
  public function index(Request $request)
  {
    $sort =$request->sort;
    $nam =$request->session('user')->get('name');
    $items = Product::orderBy($sort,'asc')->Paginate(5);
    $param = ['items'=>$items,'sort'=>$sort,'nam'=>$nam];
    return view('product.index',$param);
  }

  public function pro(Request $request)
  {
    $item = Product::where('id',$request->id)->first();
    return view('product.pro',['item'=>$item]);
  }

  public function cartlist(Request $request)
  {
    if(NULL!==$request->id){
    $count=$request->count;
    $item = Product::where('id',$request->id)->first();
    $request->session('products')
    ->push('cart',[$request->id,$item->name,$item->price,$count]);
    $msg="カートに入れました";
    }
    else{
      $msg="カートに以下の商品が入っています";
    }
    $products=$request->session('products')->get('cart');
    return view('product.cart',['products'=>$products,'msg'=>$msg]);
  }

  public function drop(Request $request)
  {
    $request->session('products')->forget('cart');
    $products=NULL;
    return view('product.cart',['products'=>$products]);
  }

  public function prodrop(Request $request)
  {
    $products=NULL;
    $request->session('products')
    ->forget('cart',[$request->input('id'),$request->input('name'),$request->input('price'),$request->input('count')]);
    return view('product.cart',['msg'=>$request->input('name').'を削除しました','products'=>$products]);
  }
  public function fav(Request $request)
  {
    if(NULL!==$request->id){
    $customer_id=$request->session('user')->get('id');
    $pro=Favorite::where('product_id',$request->id)->first();
    $cus=Favorite::where('customer_id',$customer_id)->first();
      if($pro==NULL OR $cus==NULL){
      $product=Product::where('id',$request->id)->first();
      $favorite = new Favorite;
      $favorite->customer_id=$customer_id;
      $favorite->product_id=$product->id;
      $favorite->save();
      $msg="お気に入りに登録しました";
      }else{
      $msg="以下の商品をお気に入り登録しています";
      }
    }
    else{
      $msg="以下の商品をお気に入り登録しています";
    }
    $products = Favorite::with('product')->get();
    return view('product.fav',['msg'=>$msg,'products'=>$products,'customer_id'=>$customer_id]);
  }

  public function favdrop(Request $request)
  {
    $customer_id=$request->session('user')->get('id');
    if(isset($request->user)&&isset($request->product)){
      $delete=Favorite::where('customer_id',$request->user)->where('product_id',$request->product)->delete();
    }else{
      $delete=Favorite::where('customer_id',$customer_id)->delete();
    }
    $products = Favorite::with('product')->get();
    $msg="以下の商品をお気に入り登録しています";
    return view('product.fav',['msg'=>$msg,'products'=>$products,'customer_id'=>$customer_id]);
  }
  public function subpurchase(Request $request)
  {
    $products=$request->session('products')->get('cart');
    return view('product.purchase',['products'=>$products]);
  }
  public function purchase(Request $request)
  {
    $pro=$request->session('products')->get('cart');
    $id=$request->session('user')->get('id');
    $purchase= new Purchase;
    $purchase->customer_id=$id;
    $purchase->save();
    $item = Purchase::where('customer_id',$id)->first();

    $purchase_detail = new Purchase_detail;
    $purid=$item->id;
    foreach($pro as $product){
      $data=['purchase_id'=>$purid,'product_id'=>$product[0],'count'=>$product[3]];
      $purchase_detail->insert($data);
    }
    $purchase_detail = Purchase_detail::where('purchase_id',$purid)->where('created_at',$item->created_at)->get();

    return view('product.purchase',['purchase_detail'=>$purchase_detail,'item'=>$item]);
  }
  public function exit(Request $request)
  {
    $request->session('products')->forget('cart');
    $sort =$request->sort;
    $nam =$request->session('user')->get('name');
    $items = Product::orderBy($sort,'asc')->Paginate(5);
    $param = ['items'=>$items,'sort'=>$sort,'nam'=>$nam];
    return view('product.index',$param);
  }

}
