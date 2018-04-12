<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\MessageBag;
//use Validator;
use App\Http\Requests\RegisterRequest;

class CustomerController extends Controller
{
  public function index(Request $request){
    $items = Customer::all();
    return view('shop.login',['items'=>$items]);
  }

  public function login(){
    return view ('shop.login');
  }

  public function logincheck(Request $request)
  {
    return view('shop.login',['data'=>$request->data]);
  }

  public function logout(Request $request)
  {
    $request->session('user')->forget('name');
    $request->session('user')->forget('id');
    $msg = 'ログアウトしました。';
    return view('shop.login',['msg'=>$msg]);
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
}
