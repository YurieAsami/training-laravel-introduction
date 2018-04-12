<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Validator;
use App\Purchase;
use App\favorite;

class Customer extends Model
{
    public function getData()
    {
      return $this->id . ':' . $this->name . '住所：' . $this->address .
       'ログイン名：' . $this->login . 'パスワード：' . $this->password;
    }

    protected $guarded = array('id');

    public function favorite(){
      return $this->hasOne('app\Favorite');
    }
    public function purchase(){
      return $this->hasOne('app\Purchase');
    }
}
