<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class OssServiceFacade
 *
 * @method static void getAccessUrl(string $bucket, string $object, int $timeout = 600);
 */
class OssServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'OssService';
    }
}