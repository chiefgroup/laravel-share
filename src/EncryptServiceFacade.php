<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * Class EncryptService
 * @package App\Facade
 *
 * @method static string decrypt(string $str)
 * @method static string encrypt(string $str)
 * @method static string signGenerate(string $timestamp, string $secret)
 * @method static bool signVerify(string $timestamp, string $secret, string $sign)
 */
class EncryptServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'EncryptService';
    }
}
