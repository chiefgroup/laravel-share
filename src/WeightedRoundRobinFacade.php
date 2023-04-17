<?php


namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class WeightedRoundRobinService
 * @package App\Facade
 * @method static void init(string $tache, array $data)
 * @method static int|string next(string $tache)
 */
class WeightedRoundRobinFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'WeightedRoundRobinService';
    }
}