<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Favorite extends Model
{
  public function product()
  {
    return $this->belongsTo('App\Product');
  }

  public function getData()
  {
    return 'お客様番号:' . $this->customer_id .
    ' 商品：' . '('.$this->product->id. $this->product->name.')' ;
  }

}
