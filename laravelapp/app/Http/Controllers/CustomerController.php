<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\MessageBag;
use App\Product;
use App\Http\Requests\RegisterRequest;

class CustomerController extends Controller
{
  public function index(Request $request)
  {
    $items = Customer::all();
    return view('shop.login',['data'=>$items]);
  }

  public function login()
  {
    $request->session('user')->forget('name');
    $request->session('user')->forget('id');
    $request->session('product')->forget('cart');
    return view ('shop.login');
  }

  public function logincheck(Request $request)
  {
    $logname = Customer::where('login',$request->login)->first();
     if ($logname->password==$request->password) {
       $msg ='ログインしました。';
       $name = $logname->name;
       $request->session('user')->put('name',$name);
       $request->session('user')->put('id',$logname->id);
       $sort =$request->sort;
       $items = Product::orderBy($sort,'asc')->Paginate(8);
       return view('product.index',['sort'=>$sort,'msg'=>$msg,'name'=>$name,'items'=>$items]);
     }
     $msg = 'ログインに失敗しました。';
     $name = '※ログイン名かパスワードが一致しません';
     $link1 = 'register';
     $link2 = '登録';
     $data = ['msg'=>$msg,'name'=>$name,'link1'=>$link1,'link2'=>$link2];
   return view('shop.login',$data);
  }

  public function register(Request $request)
  {
     return view('shop.register',['msg'=>'入力してください']);
  }
//会員登録（バリデーション失敗→redirect）
  public function create(RegisterRequest $request)
  {
    if(count(Customer::where('login',$request->login)->get())==0){
      $customer = new Customer;
      $form = $request->all();
      unset($form['_token']);
      $customer->fill($form)->save();
      $request->session('user')->put('name',$request->name);
      $request->session('user')->put('id',$request->id);
      $msg = '登録しました';
      return view('shop.login',['msg'=>$msg,'list'=>'1']);
    }else{
      return view('shop.register');
    }
    return redirect('/shop/register');
  }

  public function edit(Request $request)
  {
    $customer = Customer::find($request->session('user')->get('id'));
    return view('shop.edit', ['form' => $customer]);
  }

  public function update(RegisterRequest $request)
  {
    $customer = Customer::find($request->id);
    $form = $request->all();
    unset($form['_token']);
    $customer->fill($form)->save();
    $request->session('user')->put('name',$customer->name);
    $request->session('user')->put('id',$customer->id);
    return redirect('/shop/edit');
  }
  public function logoutcheck(Request $request)
  {
    return view('shop.logoutcheck');
  }
  public function logout(Request $request)
  {
    $request->session('user')->forget('name');
    $request->session('user')->forget('id');
    $request->session('product')->forget('cart');
    $msg = 'ログアウトしました。';
    return view('shop.login',['msg'=>$msg]);
  }

}
