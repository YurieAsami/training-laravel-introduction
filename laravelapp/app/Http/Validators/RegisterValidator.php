<?php
namespace App\Http\Validators;
use App\Customer;
use Illuminate\Validation\Validator;

class RegisterValidator extends Validator
{
  public function validateRegister($attribute, $value, $parameters)
  {
    return preg_match('/^[ぁ-んーァ-ヶ一-龠]+$/u',$value);
  }

  public function validateRegisteralpa($attribute, $value, $parameters)
  {
    return preg_match('/[^a-zA-Zａ-ｚＡ-Ｚ!-?！-？]+$/u',$value);
  }
  public function validateloginname($attribute, $value, $parameters)
  {
    if(count(Customer::where('login',$value)->get())==0){
      return TRUE;
    }
      return FALSE;
  }

}
