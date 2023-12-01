<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class OldDingtalkServiceFacade
 * @package App\Facade
 *
 * @method static mixed request(string $appName, string $methods, string $uri, array $options)
 * @method static mixed requestOther(string $methods, string $uri, array $options, string $accessToken = '')
 * @method static string getToken(string $appName)
 * @method static mixed robotSend(array $message, string $accessToken, string $secret = null)
 */
class OldDingtalkServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'OldDingtalkService';
    }
}