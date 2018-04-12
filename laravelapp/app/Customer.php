<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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

    public function purchase(){
      return $this->hasMany('app\Purchase');
    }
}
