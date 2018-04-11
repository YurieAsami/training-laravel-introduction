<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Purchase;
use App\Product;

class Purchase_detail extends Model
{
  public function getData()
  {
    return '購入詳細' .'('.$this->purchase_id . '商品番号' .$this->product_id .
     '数量' . $count.')';
  }
  public function purchase()
  {
    return $this->belongsTo('App\Purchase');
  }
  public function product()
  {
    return $this->belongsTo('App\Product');
  }
}
