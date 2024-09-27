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
 * @method static string|array getSignedUrlObject($object, int $timeout = 3600, bool $flag = false, array $options = [])
 * @method static array uploadSign(string $code, string $dir)
 * @method static string uploadFromUrl(string $code, string $url, string $acl = 'public-read')
 * @method static array putObjects(string $code, array $objects, string $acl = 'public-read')
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