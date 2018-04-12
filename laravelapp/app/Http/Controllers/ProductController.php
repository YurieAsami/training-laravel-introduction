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
  //商品一覧の表示
  public function index(Request $request)
  {
    $sort =$request->sort;
    $name =$request->session('user')->get('name');
    $items = Product::orderBy($sort,'asc')->Paginate(5);
    $param = ['items'=>$items,'sort'=>$sort,'nam'=>$name];
    return view('product.index',$param);
  }
  //商品詳細のページ
  public function pro(Request $request)
  {
    $item = Product::where('id',$request->id)->first();
    return view('product.pro',['item'=>$item]);
  }
  //ショッピングカート内の表示
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
//カート内の商品の削除
  public function drop(Request $request)
  {
    $request->session('products')->forget('cart');
    $products=NULL;
    return view('product.cart',['products'=>$products]);
  }
//個々のカート内の商品の削除
  public function prodrop(Request $request)
  {
    $product=$request->session('products')->get('cart');
    //配列にキーを振りなおすことで削除された$num番目の商品のキーを＄numに合わせる
    $products=array_merge($product);
    $number=($request->input('number'));
    $products=array_except($products,[$number]);
    //削除し終わった配列をセッションに登録
    $request->session('products')->put('cart',$products);
    $products=$request->session('products')->get('cart');
    $param=['msg'=>$request->input('name').'を削除しました','products'=>$products];
    return view('product.cart',$param);
  }
//お気に入り登録
  public function fav(Request $request)
  {
    $customer_id=$request->session('user')->get('id');

    if(NULL!==$request->id){
      $pro=Favorite::where('product_id',$request->id)->where('customer_id',$customer_id)->get();
   //同じユーザーが同じ商品を重複して登録できないようにif分岐
      if(count($pro)==0){
      $favorite = new Favorite;
      $favorite->customer_id=$customer_id;
      $favorite->product_id=$request->id;
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
    $param=['msg'=>$msg,'products'=>$products,'customer_id'=>$customer_id];
    return view('product.fav',$param);
  }
//お気に入り項目削除
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
    $param=['msg'=>$msg,'products'=>$products,'customer_id'=>$customer_id];
    return view('product.fav',$param);
  }
//購入確認画面
  public function subpurchase(Request $request)
  {
    $products=$request->session('products')->get('cart');
    return view('product.purchase',['products'=>$products]);
  }
//購入確定  purchasesに情報を登録、カートから商品一つ一つをdetailsに登録
  public function purchase(Request $request)
  {
    $id=$request->session('user')->get('id');
    $purchase= new Purchase;
    $purchase->customer_id=$id;
    $purchase->save();
    //今回購入したデータのみ抽出
    $item = Purchase::orderBy('id', 'desc')->where('customer_id',$id)->first();

    $purchase_detail = new Purchase_detail;
    $products=$request->session('products')->get('cart');
    $purchase_id=$item->id;
    foreach($products as $product){
      $data=['purchase_id'=>$purchase_id,'product_id'=>$product[0],'count'=>$product[3]];
      $purchase_detail->insert($data);
    }
    //購入完了として商品を画面に表示する（＝セッションカートの中身）
    $purchase_detail = Purchase_detail::where('purchase_id',$purchase_id)->where('created_at',$item->created_at)->get();
    $name=$request->session('user')->get('name');
    $address=Customer::find($id)->address;
    $param=['product'=>$purchase_detail,'name'=>$name,'address'=>$address];
    return view('product.purchase',$param);
  }
//購入完了後の偏移
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
