<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class BaiduBceService
 * @package App\Facade
 *
 * @method static mixed request(string $methods, string $uri, array $options = [])
 * @method static mixed getToken()
 */
class BaiduBceServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'BaiduBceService';
    }
}