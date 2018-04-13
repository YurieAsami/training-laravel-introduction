<?php

namespace App\Http\Middleware;

use Closure;
use App\Customer;

class LoginMiddleware
{
  public function handle($request, Closure $next)
  {
    $user = $request->session('user')->get('name');
    if(!$user==NULL){
      $msg = '以下のボタンより商品一覧へ';
      $name = '※すでにログインしています';
      $link1 = 'list?sort=id';
      $link2 = '商品一覧';
      $data = [['msg'=>$msg,'name'=>$name,'link1'=>$link1,'link2'=>$link2],];
      $request->merge(['data'=>$data]);
      return $next($request);
    }
    $login = $request->login;
    $password = $request->password;
    $logname = Customer::where('login',$login)->first();
    $pass = Customer::where('password',$password)->get();
    foreach($pass as $password){
      if ($logname['password']=$password['password']) {
        $msg ='ログインしました。';
        $name = $logname['name'];
        $link1 ='list?sort=id';
        $link2 ='商品一覧へ';
        $request->session('user')->put('name',$name);
        $request->session('user')->put('id',$logname->id);
        break;
      } else {
        $msg = 'ログインに失敗しました。';
        $name = '※ログイン名かパスワードが一致しません';
        $link1 = 'register';
        $link2 = '登録';
      }
    }
      $data = [['msg'=>$msg,'name'=>$name,'link1'=>$link1,'link2'=>$link2],];
      $request->merge(['data'=>$data]);
      return $next($request);
  }
}
