<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class OssServiceFacade
 *
 * @method static void getAccessUrl(string $object, int $timeout = 600);
 * @method static void getObjectUrl(string $object);
 * @method static void deleteObject(string $object);
 * @method static void objectAcl(string $object, string $acl)
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