<?php


namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class JuShuiTanServiceFacade
 * @package App\Facade
 *
 * @method static string getInitToken()
 * @method static string getConfig()
 * @method static string|null getSign(string $appSecret, ?array $data)
 * @method static string|null getSignByData(?array $data)
 * @method static mixed inventoryQuery(array $params = [], ?string $accessToken = null)
 * @method static mixed request(string $methods, string $uri, array $options = [])
 */
class JuShuiTanServiceFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'JuShuiTanService';
    }
}