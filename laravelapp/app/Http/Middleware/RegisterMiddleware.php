<?php

namespace App\Http\Middleware;

use Closure;

class RegisterMiddleware
{
  public function handle($request, Closure $next)
  {
    $responce = $next($request);
    $items=$request->items;

    
    $sql=$pdo->prepare('update customer set name=?, address=?, '.
           'login=?, password=? where id=?');
         $sql->execute([
           $_REQUEST['name'], $_REQUEST['address'],
           $_REQUEST['login'], $_REQUEST['password'], $id]);
         $_SESSION['customer']=[
           'id'=>$id, 'name'=>$_REQUEST['name'],
           'address'=>$_REQUEST['address'], 'login'=>$_REQUEST['login'],
           'password'=>$_REQUEST['password']];
         echo 'お客様情報を更新しました。';
       } else {
         $sql=$pdo->prepare('insert into customer values(null,?,?,?,?)');
         $sql->execute([
           $_REQUEST['name'], $_REQUEST['address'],
           $_REQUEST['login'], $_REQUEST['password']]);
         echo 'お客様情報を登録しました。';
       }
      } else {
       echo 'ログイン名がすでに使用されていますので、変更してください。';
      }



        return $response;
    }
}
