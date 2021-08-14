<?php


namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class WsService
 * @package App\Facade
 *
 * @method static void send(string $project, string $uid, array $data)
 */
class WsServiceFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'WsService';
    }
}