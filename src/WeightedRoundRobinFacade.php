<?php


namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class WeightedRoundRobinService
 * @package App\Facade
 * @method static init(string $tache, array $data)
 * @method static next(string $tache)
 */
class WeightedRoundRobinFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'WeightedRoundRobinService';
    }
}