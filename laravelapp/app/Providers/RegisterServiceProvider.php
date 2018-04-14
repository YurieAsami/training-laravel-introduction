<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use App\Http\Validators\RegisterValidator;

class RegisterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $validator=$this->app['validator'];
        $validator->resolver(function($translator,$data,$rules,$message){
          return new RegisterValidator($translator,$data,$rules,$message);
        });
    }

    public function register()
    {
        //
    }
}
