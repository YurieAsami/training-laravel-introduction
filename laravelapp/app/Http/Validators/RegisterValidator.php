<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class RegisterValidator extends Validator
{
   public function validateRegister($attribute, $value, $parameters)
   {
     return preg_match('/[ぁ-んーァ-ヶー一-龠]/u',$value);
   }
}
