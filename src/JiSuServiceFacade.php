<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class JiSuServiceFacade
 * @package App\Facade
 *
 * @method static mixed mobileBelonging(string $timestamp, ?string $secret = null)
 */
class JiSuServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'JiSuService';
    }
}
