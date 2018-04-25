<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

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
     'name' =>'required|registeralpa|register|string',
     'address'=>'required',
     'login'=>'alpha_num|between:6,12|regex:/[a-zA-Z0-9-]+$/|loginname',
     'password'=>'required|alpha_num|between:6,12|regex:/[a-zA-Z0-9-]+$/|confirmed',
     'email'=>'required|email',
     'zip'=>'required|regex:/[0-9]{3}-[0-9]{4}$/',
    ];
  }

  public function messages()
  {
    return [
      'name.required'=>'名前は必ず入力してください',
      'name.register'=>'名前に記号・数字・絵文字は使えません',
      'name.registeralpa'=>'名前にアルファベットは使えません。',
      'name.string'=>'名前に記号は使えません',

      'address.required'=>'住所は必ず入力してください',

      'login.required'=>'ログイン名は必ず入力してください',
      'login.alpha_num'=>'半角英数字で入力してください',
      'login.between'=>'６文字以上１２字以内で入力してください',
      'login.regex'=>'半角英数字で入力してください',
      'login.loginname'=>'このログイン名はすでに使用されています',

      'password.required'=>'パスワードは必ず入力してください',
      'password.between'=>'６文字以上１２字以内で入力してください',
      'password.alpha_num' =>'半角英数字で入力してください',
      'password.regex'=>'半角英数字で入力してください',
      'password.confirmed'=>'パスワードが一致しません',
      'email.required'=>'メールアドレスは必ず入力してください',
      'email.email'=>'正しいメールアドレスを入力してください',
      'zip.regex'=>'ハイフンを入れて正しく入力してください',
      'zip.required'=>'郵便番号を入力してください',
    ];
  }

}
