<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Purchase_detail;
use App\Customer;

class Purchase extends Model
{
  public function getData()
  {
    return '購入番号：' .'('.$this->purchase_detail->id . 'お客様番号：' . $this->customer_id.')';
  }
  public function purchase_detail(){
    return $this->belongsTo('app\Purchase_detail');
  }
}
