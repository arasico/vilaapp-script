<?php

namespace App\Http\Middleware;

use App\Exceptions\ApiException;
use App\Inside\Constants;
use Closure;
use Illuminate\Support\Facades\App;

class language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     * @throws \App\Exceptions\ApiException
     */
    public function handle($request, Closure $next)
    {
        switch ($request->header('language')) {
            case Constants::LANGUAGE_EN:
                App::setLocale(Constants::LANGUAGE_EN);
                break;
            case Constants::LANGUAGE_FA:
                App::setLocale(Constants::LANGUAGE_FA);
                break;
            default:
                throw new ApiException(
                    ApiException::EXCEPTION_BAD_REQUEST_400,
                    'Plz check your language header'
                );
        }
        return $next($request);
    }
}
