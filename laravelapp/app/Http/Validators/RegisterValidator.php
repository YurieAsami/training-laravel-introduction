<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class RegisterValidator extends Validator
{
   public function validateRegister($attribute, $value, $parameters)
   {
     return preg_match('/[ぁ-んーァ-ヶ一-龠]/u',$value);
   }

   public function validateRegisteralpa($attribute, $value, $parameters)
   {
     return preg_match('/[^a-zA-Zａ-ｚＡ-Ｚ!-?！-？]/u',$value);
   }
}
