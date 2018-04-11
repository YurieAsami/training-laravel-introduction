<?php

namespace App\Http\Middleware;

use Closure;
use App\Customer;

class LoginMiddleware
{
    public function handle($request, Closure $next)
    {
      $login = $request->login;
      $password = $request->password;
      $logname = Customer::where('login',$login)->first();
      $pass = Customer::where('password',$password)->first();
      if ($logname['password']=$pass['password']) {
          $msg ='ログインしました。';
          $name = $logname['name'];
          $link1 ='list?sort=id';
          $link2 ='商品一覧へ';
          $request->session('user')->put('name',$name);
          $request->session('user')->put('id',$logname['id']);
      } else {
          $msg = 'ログインに失敗しました。';
          $name = '※ログインしていません';
          $link1 = 'register';
          $link2 = '登録';
      }
       $data = [['msg'=>$msg,'name'=>$name,'link1'=>$link1,'link2'=>$link2],];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
