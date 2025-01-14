<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\Libraries\Helper;
use App\Models\ApiUser;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

class ApiAuth
{
    protected $except = [
        'api/hover/webhook/*',
        // You can add more URIs to be excluded
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $obj = new Controller();
        $obj->call_mode; // call mode for admin ..

        $this->except = collect($this->except)->filter(function ($el) use($request) {
            return $request->is($el);
        });

        \Log::info("URL: ".$request->path());

        if(in_array($obj->call_mode,['admin', 'web']) || $this->except->count() > 0){
            return $next($request);
        }

        // get api user from header
        $token = $request->header('Token');

        /*$header = $request->header('php-auth-user');
        $header = $request->header('php-auth-pw');
        $request->header('authorization')*/
        $token = md5(Config::get('constants.APP_SALT').$token);

        if(!ApiUser::api_auth($token)){
            $code = 403;
            $response = [
                'code' => $code,
                //    'success' => false,
                'message' => Lang::get('auth.failed'),
                'data' => [['auth' => Lang::get('auth.failed')]],
            ];
            return response()->json($response, $code);
        }

        return $next($request);
    }
}
