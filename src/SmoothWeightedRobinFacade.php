<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class SmoothWeightedRobinFacade
 * @package App\Facade
 * @method static void init(array $services, string $from)
 * @method static mixed next(string $from)
 */
class SmoothWeightedRobinFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SmoothWeightedRobin';
    }
}