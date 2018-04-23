<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Favorite;
use App\Purchase;
use App\Purchase_detail;
use App\Cart;
use App\Http\Requests\RegisterRequest;

class ProductController extends Controller
{
   public function testgrid(Request $request)
   {
     $products = Product::Paginate(8);
     $star=7;
     $star_quantity=56;
     $pagename='豆類';
     $id=$request->session('user')->get('id');
     $wish=Favorite::where('customer_id',$id)->count();
     $cart=Cart::where('customer_id',$id)->count();
     $carts=Cart::where('customer_id',$id)->get();
     return view('shop',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'product','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
   }
   public function testfind(Request $request)
   {
     $products=Product::orderBy('id','asc')->where('name','LIKE','%'.$request->find.'%')->Paginate(8);
     $star=7;
     $star_quantity=56;
     $pagename='豆類';
     $id=$request->session('user')->get('id');
     $wish=Favorite::where('customer_id',$id)->count();
     $cart=Cart::where('customer_id',$id)->count();
     $carts=Cart::where('customer_id',$id)->get();
     return view('shop',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'product','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
   }
  public function testlist(Request $request)
  {
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $pagename='豆類';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    return view('shop-list',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'product','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testlistfind(Request $request)
  {
    $products=Product::orderBy('id','asc')->where('name','LIKE','%'.$request->find.'%')->get();
    $star=7;
    $star_quantity=56;
    $pagename='豆類';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    return view('shop-list',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'product','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testindex(Request $request)
  {
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $pagename='ホーム';
    $id=$request->session('user')->get('id');
    $name=$request->session('user')->get('name');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('index',['name'=>$name,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testlogin(Request $request)
  {
    $request->session('user')->forget('name');
    $request->session('user')->forget('id');
    $request->session('user')->forget('login');
    $products = Product::Paginate(8);
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    return view('login',['products'=>$products,'wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testlogincheck(Request $request)
  {
    $logname = Customer::where('login',$request->name)->first();
     if ($logname->password==$request->password) {
       $msg ='ログインしました。';
       $name = $logname->name;
       $request->session('user')->put('name',$name);
       $request->session('user')->put('login',$request->name);
       $request->session('user')->put('id',$logname->id);
       $sort =$request->sort;
       $products = Product::Paginate(8);
       $id=$request->session('user')->get('id');
       $wish=Favorite::where('customer_id',$id)->count();
       $cart=Cart::where('customer_id',$id)->count();
       $carts=Cart::where('customer_id',$id)->get();
       $star=7;
       return view('index',['star'=>$star,'page'=>'index','msg'=>$msg,'name'=>$name,'products'=>$products,'wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
     }
      $msg ='※ログイン名かパスワードが一致しません';
      $id=$request->session('user')->get('id');
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
     return view('login',['page'=>'login','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testregister(Request $request)
  {
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('register',['page'=>'regiter','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcreate(RegisterRequest $request)
    {
      $customer = new Customer;
      $form = $request->all();
      unset($form['_token']);
      $customer->fill($form)->save();
      $cus = Customer::where('login',$request->login)->first();
      $request->session('user')->put('name',$cus->name);
      $request->session('user')->put('login',$request->login);
      $request->session('user')->put('id',$cus->id);
      $id=$request->session('user')->get('id');
      $msg = '登録しました';
      $name=$request->session('user')->get('name');
      $products = Product::Paginate(8);
      $id=$request->session('user')->get('id');
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
      $star=7;
      return view('index',['star'=>$star,'msg'=>$msg,'name'=>$name,'products'=>$products,'cart'=>$cart,'carts'=>$carts,'wish'=>$wish]);
    }

  public function testfaq(Request $request)
  {
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $pagename='FAQ';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('faq',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testdetail(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(8);
    $star=7;
    $star_quantity=56;
    $pagename='single';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('detail',['product'=>$product,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcontact(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(8);
    $star=7;
    $star_quantity=56;
    $pagename='single';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('contact',['product'=>$product,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcompare(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $pagename='single';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('compare',['product'=>$product,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcheckout(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $pagename='single';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('checkout',['product'=>$product,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcart(Request $request)
  {
    $id=$request->session('user')->get('id');
    $carts = Cart::where('customer_id',$id)->Paginate(4);
    $pagename='cart';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=count(Cart::where('customer_id',$id)->get());
    $other_products=Product::Paginate(8);
    $cart=Cart::where('customer_id',$id)->count();
    if($cart==0)
    {
      return view('cart-empty',['other_products'=>$other_products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
    }
     return view('cart',['other_products'=>$other_products,'carts'=>$carts,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcartin(Request $request)
  {
    $id=$request->session('user')->get('id');
    if(NULL!==$request->cart){
      $msg="この商品はすでに登録済みです";
      $pro=Cart::where('product_id',$request->cart)->where('customer_id',$id)->get();
      if(count($pro)==0){
        $cart = new Cart;
        $cart->customer_id=$id;
        $cart->product_id=$request->cart;
        $cart->count='1';
        $cart->save();
        $msg="カートに商品を入れました";
      }
    }
      $carts = Cart::where('customer_id',$id)->get();
      $pagename='cart';
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $other_products=Product::Paginate(8);
     return view('cart',['msg'=>$msg,'other_products'=>$other_products,'carts'=>$carts,'pagename'=>$pagename,'page'=>'cart','wish'=>$wish,'cart'=>$cart]);
  }
  public function testcartalldrop(Request $request)
  {
    $id=$request->session('user')->get('id');
    Cart::where('customer_id',$id)->delete();
    $carts=NULL;
    $pagename='cart';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $msg="カートを空にしました";
    return view('cart-empty',['pagename'=>$pagename,'wish'=>$wish,'msg'=>$msg,'other_products'=>$other_products,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcartdrop(Request $request)
  {
    $id=$request->session('user')->get('id');
    Cart::where('customer_id',$id)->where('product_id',$request->id)->delete();
    $msg=$request->input('name').'を削除しました';
    $pagename='cart';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
    return view('cart',['pagename'=>$pagename,'wish'=>$wish,'msg'=>$msg,'other_products'=>$other_products,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testblog(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $pagename='single';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
     return view('blog',['product'=>$product,'blogs'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testblogdetail(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $id=$request->session('user')->get('id');
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
     return view('blog-detail',['blog'=>$product,'blogs'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testbloglist(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $pagename='single';
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
     return view('blog-list',['product'=>$product,'blogs'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testwishlist(Request $request)
  {
    $id=$request->session('user')->get('id');
    $products = Favorite::where('customer_id',$id)->Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-wishlist',['products'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testwishin(Request $request)
  {
    $id=$request->session('user')->get('id');
    if(NULL!==$request->wish){
      $pro=Favorite::where('product_id',$request->wish)->where('customer_id',$id)->get();
   //同じユーザーが同じ商品を重複して登録できないようにif分岐
      if(count($pro)==0){
      $favorite = new Favorite;
      $favorite->customer_id=$id;
      $favorite->product_id=$request->wish;
      $favorite->save();
      $msg="商品をお気に入り登録しました";
      }
    }
    $msg="以下の商品をお気に入り登録しています";
    $products = Favorite::where('customer_id',$id)->get();
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(8);
       return view('account-wishlist',['msg'=>$msg,'other_products'=>$other_products,'products'=>$products,'wish'=>$wish,'cart'=>$cart,'carts'=>$carts,'customer'=>$customer]);
  }
  public function testprofile(Request $request)
  {
    $id=$request->session('user')->get('id');
    $mounths=array('0','Jan','Feb','Mar','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec');
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-profile',['mounths'=>$mounths,'product'=>$product,'products'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testorder(Request $request)
  {
    $id=$request->session('user')->get('id');
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $purchases =Purchase::where('customer_id',$id)->Paginate(4);
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(8);
     return view('account-order',['product'=>$product,'products'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'purchases'=>$purchases,'carts'=>$carts]);
  }
  public function testpassword(Request $request)
  {
    $id=$request->session('user')->get('id');
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(8);
     return view('account-password',['product'=>$product,'products'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testaddress(Request $request)
  {
    $id=$request->session('user')->get('id');
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(8);
     return view('account-address',['product'=>$product,'products'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testabout(Request $request)
  {
    $id=$request->session('user')->get('id');
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(8);
     return view('about',['product'=>$product,'products'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }








  //商品一覧の表示
  public function index(Request $request)
  {
    $sort =$request->sort;
    $name =$request->session('user')->get('name');
    if($sort=='priceup'){
      $items = Product::orderBy('price','desc')->Paginate(8);
    }elseif($sort=='idup'){
      $items = Product::orderBy('id','desc')->Paginate(8);
    }else{
      $items = Product::orderBy($sort,'asc')->Paginate(8);
    }
    $param = ['items'=>$items,'sort'=>$sort,'name'=>$name];
    return view('product.index',$param);
  }
  public function seach(Request $request)
  {
    $seachs=Product::orderBy('id','asc')->where('name','LIKE','%'.$request->input.'%')->get();
    $items = Product::orderBy('id','asc')->Paginate(8);
    $name =$request->session('user')->get('name');
    $param = ['seachs'=>$seachs,'sort'=>'id','name'=>$name,'items'=>$items];
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
    $customer_id=$request->session('user')->get('id');
    if(NULL!==$request->id){
      $pro=Cart::where('product_id',$request->id)->where('customer_id',$customer_id)->get();
     //同じユーザーが同じ商品を重複して登録できないようにif分岐
      if(count($pro)==0){
          $cart = new Cart;
          $cart->customer_id=$customer_id;
          $product->product_id=$request->id;
          $cart->save();
          $msg="カートに入れました";
        }else{
          $msg="以下の商品をお気に入り登録しています";
        }
    }
    else{
      $msg="以下の商品をお気に入り登録しています";
    }
    $products =Cart::where('customer_id',$customer_id)->with('product')->get();
    $param=['msg'=>$msg,'products'=>$products,'customer_id'=>$customer_id];
    return view('product.cart',$param);;
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
    $products = Favorite::where('customer_id',$customer_id)->with('product')->get();
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
    $products = Favorite::where('customer_id',$customer_id)->with('product')->get();
    $msg="以下の商品をお気に入り登録しています";
    $param=['msg'=>$msg,'products'=>$products,'customer_id'=>$customer_id];
    return view('product.fav',$param);
  }
//購入確認画面
  public function subpurchase(Request $request)
  {
    $products=$request->session('products')->get('cart');
    return view('product.subpur',['products'=>$products]);
  }
//購入確定  purchasesに情報を登録、
  public function purchase(Request $request)
  {
    $id=$request->session('user')->get('id');
    $purchase= new Purchase;
    $purchase->customer_id=$id;
    $purchase->save();
    //今回購入したデータのみ抽出
    $item = Purchase::orderBy('id', 'desc')->where('customer_id',$id)->first();
    //カートから商品一つ一つをdetailに登録
    $purchase_detail = new Purchase_detail;
    $products=$request->session('products')->get('cart');
    foreach($products as $product){
      $data=['purchase_id'=>$item->id,'product_id'=>$product[0],'count'=>$product[3]];
      $purchase_detail->insert($data);
    }
    //購入確定画面として再度商品を表示する（purchase_detail＝セッションカートの中身）
    $purchase_detail =Purchase_detail::where('purchase_id',$item->id)->where('updated_at',$item->updated_at)->get();
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
    $name =$request->session('user')->get('name');
    $items = Product::orderBy($sort,'asc')->Paginate(8);
    $param = ['items'=>$items,'sort'=>$sort,'name'=>$name];
    return view('product.index',$param);
  }
  public function history(Request $request)
  {
    $name =$request->session('user')->get('name');
    $id =$request->session('user')->get('id');
    $items =Purchase_detail::with('product')->get();
    $itemm =Purchase::where('customer_id',$id)->Paginate(3);
    return view('product.purchase_detail',['items'=>$items,'itemm'=>$itemm,'name'=>$name]);
  }
}
