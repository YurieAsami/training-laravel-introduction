<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class RegisterRequest extends FormRequest
{
  public function authorize()
  {
     if ($this->path() ==  'shop/register' OR 'shop/edit'){
       return true;
     } else {
       return false;
     }
  }

  public function rules()
  {
    return [
     'name' =>'required|string|register',
     'address'=>'required',
     'login'=>'alpha_num|between:6,12|regex:/[a-zA-Z0-9-]$/',
     'password'=>'alpha_num|between:6,12|regex:/[a-zA-Z0-9-]$/',
    ];
  }

  public function messages()
  {
    return [
      'name.required'=>'名前は必ず入力してください',
      'name.string'=>'名前に文字以外を入力することはできません',
      'name.register'=>'名前に絵文字、記号は使用できません',

      'address.required'=>'住所は必ず入力してください',

      'login.required'=>'ログイン名は必ず入力してください',
      'login.alpha_num'=>'ログイン名は半角英数字で入力してください',
      'login.between'=>'ログイン名は６文字以上１２字以内で入力してください',
      'login.regex'=>'ログイン名は半角英数字で入力してください',

      'password.required'=>'パスワードは必ず入力してください',
      'password.between'=>'パスワードは６文字以上１２字以内で入力してください',
      'password.alpha_num' =>'パスワードは半角英数字で入力してください',
      'password.regex'=>'パスワードは半角英数字で入力してください',
    ];
  }

}
