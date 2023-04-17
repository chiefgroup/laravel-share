<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class DingtalkService
 * @package App\Facade
 *
 * @method static mixed request(string $accessToken = null, string $methods, string $uri, array $options)
 * @method static mixed getToken(string $appKey, string $appSecret)
 */
class DingtalkServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DingtalkService';
    }
}