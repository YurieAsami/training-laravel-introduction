<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Customer extends Model
{
    public function getData()
    {
      return $this->id . ':' . $this->name . '住所：' . $this->address .
       'ログイン名：' . $this->login . 'パスワード：' . $this->password;
    }

    protected $guarded = array('id');

    public static $rules=array(
      'name' =>'required',
      'address'=>'required',
      'login'=>'alpha|min:6|max:12',
      'password'=>'alpha|min:6|max:12',
    );

    /*public static $message=array(
        'name'=>'名前は必ず入力してください。',
        'address'=>'住所は必ず入力してください。',
        'login'=>'ログイン名はアルファベットで入力してください',
        'password' =>'パスワードは英数字で入力してください',
    );
*/

    public function favorite(){
      return $this->hasOne('app\Favorite');
    }
    public function purchase(){
      return $this->hasOne('app\Purchase');
    }
}
