<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favorite;
use App\Purchase_detail;

class Product extends Model
{
  public function getData()
  {
    return $this->id . ':' . $this->name . '価格：' . $this->price;
  }
  public function favorite(){
    return $this->hasMany('app\Favorite');
  }
  public function Purchase_detail(){
    return $this->hasMany('app\Purchase_detail');
  }
}
