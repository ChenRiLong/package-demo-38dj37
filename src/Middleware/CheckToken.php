<?php

namespace Chuhai\Packagedemo\Middleware;

use Closure;

class CheckToken
{
    public function handle($request, Closure $next)
    {
        // 获取token关联的用户信息
        define("USER_ID", "33");

        $response = $next($request);

        return $response;
    }
}
