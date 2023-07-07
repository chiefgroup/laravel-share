<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class OssServiceFacade
 *
 * @method static string getAccessUrl(string $object, int $timeout = 600);
 * @method static string getObjectUrl(string $object);
 * @method static void deleteObject(string $object);
 * @method static void objectAcl(string $object, string $acl)
 * @method static string getCustomDomainUrl(string $object)
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