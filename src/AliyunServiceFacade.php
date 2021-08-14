<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class AliyunService
 * @package App\Facade
 *
 * @method static array afsVerify(string $nvcVal);
 * @method static boolean verifyKey(string $key);
 */
class AliyunServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AliyunService';
    }
}
