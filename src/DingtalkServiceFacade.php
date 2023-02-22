<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class DingtalkService
 * @package App\Facade
 *
 * @method static void request(string $accessToken = null, string $methods, string $uri, array $options)
 * @method static void getToken(string $appKey, string $appSecret)
 */
class DingtalkServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DingtalkService';
    }
}