<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class NewDingtalkService
 * @package App\Facade
 *
 * @method static mixed request(string $appName, string $methods, string $uri, array $options)
 * @method static mixed requestSync(string $appName, string $methods, string $uri, array $options)
 * @method static string getToken(string $appName)
 * @method static mixed robotSend(array $message, string $accessToken, string $secret = null)
 */
class NewDingtalkServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'NewDingtalkService';
    }
}