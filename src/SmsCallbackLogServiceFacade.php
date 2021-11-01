<?php


namespace ChiefGroup\LaravelShare;


use Illuminate\Support\Facades\Facade;

/**
 * Class BucketService
 * @package App\Facade
 *
 * @method static bool save(array $data);
 * @method static array search(array $condition, int $page = 1, int $pageSize = 20);
 */
class SmsCallbackLogServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SmsCallbackLogService';
    }
}