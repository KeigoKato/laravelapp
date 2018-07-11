<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use App\Http\Validators\HelloValidator;



class HelloServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    $validator = $this->app["validator"];
    $validator->resolver(function($translator, $data, $rules, $messages){
      return new HelloValidator($translator, $data, $rules, $messages);
    });
    // View::composer(
    //   "hello.index", "App\Http\Composers\HelloComposer"
    // );
    // Validator::extend("hello", function($attribute, $value, $parameters, $validator){
    //   return $value%2 == 0;
    // });
  }
}