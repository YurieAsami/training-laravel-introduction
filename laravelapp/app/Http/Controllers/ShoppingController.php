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
    $products = Product::Paginate(4);
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
    $customer = Customer::where('id',$id)->first();
    $carts = Cart::where('customer_id',$id)->Paginate(4);
    $pagename='cart';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=count(Cart::where('customer_id',$id)->get());
    $other_products=Product::Paginate(8);
    $cart=Cart::where('customer_id',$id)->count();
    if($cart==0 OR $id==NULL){
      $msg="※カート情報がありません";
      return view('cart-empty',['customer'=>$customer,'msg'=>$msg,'other_products'=>$other_products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
    }
     return view('cart',['other_products'=>$other_products,'carts'=>$carts,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcartin(Request $request)
  {
    $pagename='cart';
    $other_products=Product::Paginate(8);
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $wish=Favorite::where('customer_id',$id)->count();
    $msg="";
    $cart=Cart::where('customer_id',$id)->count();
    $carts = Cart::where('customer_id',$id)->get();
    if ($id==NULL) {
      $msg="※ユーザー情報がありません";
      return view('cart-empty',['customer'=>$customer,'msg'=>$msg,'other_products'=>$other_products,'pagename'=>$pagename,'page'=>'cart','wish'=>$wish,'cart'=>NULL,'carts'=>NULL]);
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
        if(isset($request->size)){
          $cart->size=$request->size;
        }else{
          $cart->size='M';
        }
        $cart->save();
        $msg="カートに商品を入れました";
      }
      $cart=Cart::where('customer_id',$id)->count();
      $carts = Cart::where('customer_id',$id)->get();
    }
     return view('cart',['customer'=>$customer,'msg'=>$msg,'other_products'=>$other_products,'carts'=>$carts,'pagename'=>$pagename,'page'=>'cart','wish'=>$wish,'cart'=>$cart]);
  }
  public function testcartalldrop(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    Cart::where('customer_id',$id)->delete();
    $carts=NULL;
    $pagename='cart';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $msg="カートを空にしました";
    return view('cart-empty',['customer'=>$customer,'pagename'=>$pagename,'wish'=>$wish,'msg'=>$msg,'other_products'=>$other_products,'cart'=>$cart,'carts'=>$carts]);
  }
  public function testcartdrop(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    Cart::where('customer_id',$id)->where('product_id',$request->id)->delete();
    $msg=$request->input('name').'を削除しました';
    $pagename='cart';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
    return view('cart',['customer'=>$customer,'pagename'=>$pagename,'wish'=>$wish,'msg'=>$msg,'other_products'=>$other_products,'cart'=>$cart,'carts'=>$carts]);
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
    if ($id==NULL) {
      $msg="※ユーザー情報がありません";
    }
    $msg="";
    $products = Favorite::where('customer_id',$id)->Paginate(4);
    $customer = Customer::where('id',$id)->first();
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $other_products=Product::Paginate(8);
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-wishlist',['msg'=>$msg,'products'=>$products,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
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
      $products = Favorite::where('customer_id',$id)->get();
      $customer = Customer::where('id',$id)->first();
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
      $other_products=Product::Paginate(8);
    }
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
    $customer = Customer::where('id',$id)->first();
    //ユーザーの購入履歴
    $purcus=Purchase::where('customer_id',$id)->Paginate(4);
    $purchases =Purchase_detail::with('Product')->get();
    $pagename='single';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    $other_products=Product::Paginate(8);
     return view('account-order',['purchases'=>$purchases,'purcus'=>$purcus,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'purchases'=>$purchases,'carts'=>$carts]);
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
    $customer = Customer::where('id',$id)->first();
    $pagename='my address';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-address',['pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testpassedit(RegisterRequest $request)
  {
      $id=$request->session('user')->get('id');
      $customer = Customer::where('id',$id)->first();
    if($request->oldpassword=$customer->password){
      $customer = Customer::find($request->id);
      $form = $request->all();
      unset($form['_token']);
      $customer->fill($form)->save();
      $msg = '変更しました';
    }else{
      $msg='パスワードが一致しないか、旧パスワードが間違っています';
    }
      $customer = Customer::where('id',$id)->first();
      $pagename='my address';
      $wish=Favorite::where('customer_id',$id)->count();
      $cart=Cart::where('customer_id',$id)->count();
      $carts=Cart::where('customer_id',$id)->get();
     return view('account-password',['msg'=>$msg,'pagename'=>$pagename,'page'=>'password','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testaddressedit(RegisterRequest $request)
  {
    if ($request->zip!==NULL && $request->address!==NULL){
      $customer = Customer::find($request->id);
      $form = $request->all();
      unset($form['_token']);
      $customer->fill($form)->save();
      $msg = '変更しました';
    }
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $pagename='my address';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('account-address',['msg'=>$msg,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function testprofileedit(RegisterRequest $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::find($id);
    $form = $request->all();
    unset($form['_token']);
    $customer->fill($form)->save();
    $msg = '変更しました';
    $customer = Customer::where('id',$id)->first();
    $pagename='my profile';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
    return view('account-profile',['msg'=>$msg,'pagename'=>$pagename,'page'=>'index','wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
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
  public function logout(Request $request)
  {
    $id=$request->session('user')->get('id');
    $customer = Customer::where('id',$id)->first();
    $pagename='Logout';
    $wish=Favorite::where('customer_id',$id)->count();
    $cart=Cart::where('customer_id',$id)->count();
    $carts=Cart::where('customer_id',$id)->get();
     return view('logout',['pagename'=>$pagename,'wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
  public function logfinish(Request $request){
    $pagename='Logout';
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
     return view('index',['products'=>$products,'star'=>$star,'star_quantity'=>$star_quantity,'msg'=>$msg,'pagename'=>$pagename,'wish'=>$wish,'cart'=>$cart,'customer'=>$customer,'carts'=>$carts]);
  }
}
