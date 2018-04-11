<?php

namespace App\Http\Middleware;

use Closure;

class ProductMiddleware
{
    public function handle($request, Closure $next)
    {
      $response = $next($request);
      $content = $response->$content();

      $pattern = '/<middleware>(.*)</middleware>/i';
      $replace = '<a href=/shop/list/$1>$name</a>';
      $content = preg_replac($pattern,$replace,$content);

      $responce -> setContent($content);
      return $responce;

    }
}
