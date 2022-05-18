<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class EncryptService
 * @package App\Facade
 *
 * @method static string decrypt(string $str)
 * @method static string encrypt(string $str)
 */
class EncryptServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'EncryptService';
    }
}
