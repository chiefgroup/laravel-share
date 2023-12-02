<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class NewDingtalkService
 * @package App\Facade
 *
 * @method static mixed getConfig(string $appName)
 * @method static mixed request(string $appName, string $methods, string $uri, array $options)
 * @method static mixed requestOther(string $methods, string $uri, array $options, string $accessToken = '')
 * @method static string getAccessToken(string $appName)
 * @method static mixed robotGroupMessagesSend(string $appName, string $conversationKey, array $options)
 */
class NewDingtalkServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'NewDingtalkService';
    }
}