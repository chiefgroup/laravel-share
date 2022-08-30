<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class SmsServiceFacade
 *
 * @method static void sendCommonVerificationCode(string $mobile, string $code);
 */
class SmsServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'SmsService';
    }
}