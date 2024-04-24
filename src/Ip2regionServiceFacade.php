<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class Ip2regionServiceFacade.
 *
 * @method static array btreeSearch(string $ip);
 * @method static array binarySearch(string $ip);
 * @method static array memorySearch(string $ip);
 */
class Ip2regionServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Ip2regionService';
    }
}