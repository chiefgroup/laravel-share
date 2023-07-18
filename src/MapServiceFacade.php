<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class MapServiceFacade
 * @package App\Facade
 *
 * @method static mixed request(string $methods, string $uri, array $options = [])
 */
class MapServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MapService';
    }
}