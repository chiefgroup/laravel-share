<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class SmsServiceFacade
 *
 * @method static void sendVerificationCode(string $mobile, string $code, string $signature, string $signatureId = '')
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