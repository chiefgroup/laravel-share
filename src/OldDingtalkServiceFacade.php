<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class OldDingtalkServiceFacade
 * @package App\Facade
 *
 * @method static mixed getConfig(string $appName)
 * @method static mixed request(string $appName, string $methods, string $uri, array $options)
 * @method static mixed requestOther(string $methods, string $uri, array $options, string $accessToken = '')
 * @method static string getAccessToken(string $appName)
 * @method static mixed robotSend(string $appName, string $robotKey, array $message)
 */
class OldDingtalkServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'OldDingtalkService';
    }
}