<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Customer;

class Favorite extends Model
{
  public function getData()
  {
    return 'お客様番号:' . $this->customer_id .
    ' 商品：' . '('.$this->id. $this->name.')' ;
  }

  public function product()
  {
    return $this->belongsTo('App\Product');
  }
}
