<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public function getData()
  {
    return 'お客様番号:' . $this->customer_id .
    ' 商品：' . '('.$this->product_id.')'. $this->product->name.$this->count;
  }

  public function product()
  {
    return $this->belongsTo('App\Product');
  }
}
