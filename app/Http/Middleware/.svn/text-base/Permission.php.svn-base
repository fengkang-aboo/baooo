<?php namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;
use Closure;

class Permission {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $permits = $this->getPermission($request);

        $user = \Auth::user();
        if($user == null){
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->guest('auth/login');
            }
        }
        if($permits == null){
            return $next($request);
        }
        // 只要有一个有权限，就可以进入这个请求
        foreach ($permits as $permit) {
            if ($permit == '*') {
                return $next($request);
            }
            if ($user->hasPermission($permit)) {
                return $next($request);
            }
        }
        return redirect()->to('errors/nopermissions');
    }

    // 获取当前路由需要的权限
    public  function getPermission($request)
    {
        $actions = $request->route()->getAction();
        if (empty($actions['permissions'])) {
            return null;
        }
        return is_array($actions['permissions'])?$actions['permissions']:[$actions['permissions']];
    }
}