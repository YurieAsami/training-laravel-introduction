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
use App\Http\Requests\AddRequest;

class ShoppingController extends Controller
{
   public function testgrid(Request $request)
   {
     $products = Product::Paginate(6);
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
    $id=$request->session('user')->get('id');
    $name=$request->session('user')->get('name');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('index',['name'=>$name,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'page'=>'ホーム','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
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
    return view('login',['products'=>$products,'wish'=>$wish,'cart'=>$cart,'carts'=>$carts,'page'=>'ログイン']);
  }
  public function testlogincheck(Request $request)
  {
    $logname = Customer::where('login',$request->login)->first();
    $products = Product::Paginate(8);
    if ($logname['password']==$request->password) {
      $msg ='ログインしました。';
      $name = $logname['name'];
      $request->session('user')->put('name',$name);
      $request->session('user')->put('login',$request->login);
      $request->session('user')->put('id',$logname['id']);
      $id=$request->session('user')->get('id');
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
      $star=7;
      return view('index',['star'=>$star,'page'=>'ホーム','msg'=>$msg,'name'=>$name,'products'=>$products,'wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
    }
    $wish=0;
    $cart=0;
    $carts=NULL;
    $msg='ログインに失敗しました';

     return view('login',['products'=>$products,'msg'=>$msg,'page'=>'ログイン','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);

  }
  public function testregister(Request $request)
  {
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('register',['page'=>'会員登録','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcreate(AddRequest $request)
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
      return view('index',['page'=>'ホーム','star'=>$star,'msg'=>$msg,'name'=>$name,'products'=>$products,'cart'=>$cart,'carts'=>$carts,'wish'=>$wish]);
    }

  public function testfaq(Request $request)
  {
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('faq',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'page'=>'FAQ','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testdetail(Request $request)
  {
    $product = Product::where('id',$request->id)->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $id=$request->session('user')->get('id');
    $other_products = Product::Paginate(4);
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('detail',['other_products'=>$other_products,'product'=>$product,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'page'=>'商品','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcontact(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(8);
    $star=7;
    $star_quantity=56;
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('contact',['product'=>$product,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'page'=>'お問い合わせ','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcompare(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('compare',['product'=>$product,'products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'page'=>'比較','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcheckout(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $products = Cart::where('customer_id',$id)->get();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('checkout',['customer'=>$customer,'products'=>$products,'page'=>'注文','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testpurchase(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $products = Cart::where('customer_id',$id)->get();
    $wish=Favorite::where('customer_id',$id)->count();
    if($products=NULL){
      $msg="※カート情報がありません";
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
      return view('cart-empty',['customer'=>$customer,'msg'=>$msg,'page'=>'cart','wish'=>$wish,'cart'=>'0','carts'=>NULL]);
    }
    $purchase = new Purchase;
    $purchase->customer_id=$id;
    $purchase->total=$request->total;
    $purchase->save();
    $pur = Purchase::orderBy('id','desc')->where('customer_id',$id)->first();
    $carts=Cart::where('customer_id',$id)->get();
    foreach ($carts as $value) {
      $purchase_detail = new Purchase_detail;
      $purchase_detail->purchase_id=$pur->id;
      $purchase_detail->product_id=$value->product->id;
      $purchase_detail->count=$value->count;
      $purchase_detail->save();
    }
    $products = Purchase_detail::where('purchase_id',$pur->id)->get();
    $delete=Cart::where('customer_id',$id)->delete();
    $cart=Cart::where('customer_id',$id)->count();
     return view('purchase',['pur'=>$pur,'customer'=>$customer,'products'=>$products,'page'=>'注文完了','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcart(Request $request)
  {
    $other_products=Product::Paginate(4);
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $carts = Cart::where('customer_id',$id)->Paginate(4);
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=count(Cart::where('customer_id',$id)->get());
    $other_products=Product::Paginate(4);
    $cart=Cart::where('customer_id',$id)->count();
    if($cart==0 OR $id==NULL){
      $msg="※カート情報がありません";
      return view('cart-empty',['customer'=>$customer,'msg'=>$msg,'other_products'=>$other_products,'page'=>'cart','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
    }
     return view('cart',['other_products'=>$other_products,'carts'=>$carts,'page'=>'cart','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcartin(Request $request)
  {
    $other_products=Product::Paginate(4);
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $msg="";
    $cart=Cart::where('customer_id',$id)->count();
    $carts = Cart::where('customer_id',$id)->get();
    if ($id==NULL) {
      $msg="※ユーザー情報がありません";
      return view('cart-empty',['customer'=>$customer,'msg'=>$msg,'other_products'=>$other_products,'page'=>'cart','wish'=>$wish,'cart'=>NULL,'carts'=>NULL]);
    }elseif(NULL!==$request->cart){
      $msg="この商品はすでに登録済みです";
      $pro=Cart::where('product_id',$request->cart)->where('customer_id',$id)->get();
      if(count($pro)==0){
        $cart = new Cart;
        $cart->customer_id=$id;
        $cart->product_id=$request->cart;
        if(isset($request->quantity)){
          $cart->count=$request->quantity;
        }else{
          $cart->count='1';
        }
        $cart->save();
        $msg="カートに商品を入れました";
      }
      $cart=Cart::where('customer_id',$id)->count();
      $carts = Cart::where('customer_id',$id)->get();
    }
     return view('cart',['customer'=>$customer,'msg'=>$msg,'other_products'=>$other_products,'carts'=>$carts,'page'=>'cart','wish'=>$wish,'cart'=>$cart]);
  }
  public function testcartalldrop(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    Cart::where('customer_id',$id)->delete();
    $carts=NULL;
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(4);
    $msg="カートを空にしました";
    return view('cart-empty',['page'=>'cart','customer'=>$customer,'wish'=>$wish,'msg'=>$msg,'other_products'=>$other_products,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcartdrop(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    Cart::where('customer_id',$id)->where('product_id',$request->id)->delete();
    $wish=Favorite::where('customer_id',$id)->count();
    $other_products=Product::Paginate(4);
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $msg=$request->name.'を削除しました';
    return view('cart',['other_products'=>$other_products,'customer'=>$customer,'wish'=>$wish,'msg'=>$msg,'cart'=>$cart,'carts'=>$carts,'page'=>'お気に入りリスト']);
  }
  public function testblog(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(4);
    $carts=Cart::where('customer_id',$id)->get();
    return view('blog',['product'=>$product,'blogs'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'page'=>'blog','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testblogdetail(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(4);
    $carts=Cart::where('customer_id',$id)->get();
     return view('blog-detail',['blog'=>$product,'blogs'=>$products,'page'=>'blog','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testbloglist(Request $request)
  {
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
    $id=$request->session('user')->get('id');
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(4);
    $carts=Cart::where('customer_id',$id)->get();
     return view('blog-list',['product'=>$product,'blogs'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'page'=>'blog','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testwishlist(Request $request)
  {
    $id=$request->session('user')->get('id');
    if ($id==NULL) {
      $msg="※ユーザー情報がありません";
    }
    $msg="";
    $products = Favorite::where('customer_id',$id)->Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    return view('account-wishlist',['msg'=>$msg,'products'=>$products,'page'=>'お気に入りリスト','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testwishin(Request $request)
  {
    $id=$request->session('user')->get('id');
    $msg="以下の商品をお気に入り登録しています";
    if ($id==NULL) {
      $msg="※ユーザー情報がありません";
    }elseif(NULL!==$request->wish){
      $pro=Favorite::where('product_id',$request->wish)->where('customer_id',$id)->get();
   //同じユーザーが同じ商品を重複して登録できないようにif分岐
      if(count($pro)==0){
      $favorite = new Favorite;
      $favorite->customer_id=$id;
      $favorite->product_id=$request->wish;
      $favorite->save();
      $msg="商品をお気に入り登録しました";
      }
      $products = Favorite::where('customer_id',$id)->Paginate(8);
      $customer = Customer::where('id',$id)->first();
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
      $other_products=Product::Paginate(4);
    }
    return view('account-wishlist',['msg'=>$msg,'other_products'=>$other_products,'products'=>$products,'wish'=>$wish,'cart'=>$cart,'carts'=>$carts,'customer'=>$customer,'page'=>'お気に入り']);
  }
  public function testwishdrop(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    Favorite::where('customer_id',$id)->where('product_id',$request->wish)->delete();
    $item=Product::where('id',$request->wish)->first();
    $msgd=($item->name).'を削除しました';
    $wish=Favorite::where('customer_id',$id)->count();
    $products=Favorite::where('customer_id',$id)->Paginate(8);
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    return view('account-wishlist',['products'=>$products,'customer'=>$customer,'wish'=>$wish,'msgd'=>$msgd,'cart'=>$cart,'carts'=>$carts,'page'=>'お気に入りリスト']);
  }
  public function testprofile(Request $request)
  {
    $id=$request->session('user')->get('id');
    $mounths=array('0','Jan','Feb','Mar','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec');
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-profile',['mounths'=>$mounths,'page'=>'プロフィール','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testorder(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    //ユーザーの購入履歴
    $purcus=Purchase::where('customer_id',$id)->get();
    $purchases =Purchase_detail::with('Product')->Paginate(8);
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(4);
     return view('account-order',['purchases'=>$purchases,'purcus'=>$purcus,'page'=>'注文履歴','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'purchases'=>$purchases,'carts'=>$carts]);
  }
  public function testpassword(Request $request)
  {
    $id=$request->session('user')->get('id');
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(4);
     return view('account-password',['product'=>$product,'products'=>$products,'page'=>'パスワード変更','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testaddress(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-address',['page'=>'住所変更','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testpassedit(AddRequest $request)
  {
      $id=$request->session('user')->get('id');
      $customer = Customer::where('id',$id)->first();
    if($request->oldpassword=$customer->password){
      $customer = Customer::find($request->id);
      $form = $request->all();
      unset($form['_token']);
      $customer->fill($form)->save();
      $msg = 'パスワードを変更しました';
    }else{
      $msg='パスワードが一致しないか、旧パスワードが間違っています';
    }
      $customer = Customer::where('id',$id)->first();
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
     return view('account-password',['msg'=>$msg,'page'=>'パスワード変更','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testaddressedit(AddRequest $request)
  {
    if ($request->zip!==NULL && $request->address!==NULL){
      $customer=Customer::find($request->id);
      $forms = $request->all();
      unset($forms['_token']);
      $customer->fill($forms)->save();
      $msg = '住所を変更しました';
    }
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-address',['msg'=>$msg,'page'=>'住所変更','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testprofileedit(AddRequest $request)
  {
    $id=$request->session('user')->get('id');
    $customers = Customer::find($id);
    $form = $request->all();
    unset($form['_token']);
    $customers->fill($form)->save();
    $msg = 'お名前・メールアドレスを変更しました';
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    return view('account-profile',['msg'=>$msg,'page'=>'プロフィール変更','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testabout(Request $request)
  {
    $id=$request->session('user')->get('id');
    $product = Product::where('id','1')->first();
    $products = Product::Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(4);
     return view('about',['product'=>$product,'products'=>$products,'page'=>'About Us','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function logout(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('logout',['page'=>'ログアウト','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function logfinish(Request $request)
  {
    $request->session('user')->forget('name');
    $request->session('user')->forget('id');
    $request->session('user')->forget('login');
    $msg = 'ログアウトしました。';
    $key="finish";
    $id=NULL;
    $customer=NULL;
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $products = Product::Paginate(4);
    $star=7;
    $star_quantity=56;
     return view('index',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'msg'=>$msg,'page'=>'ログアウト','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
}
