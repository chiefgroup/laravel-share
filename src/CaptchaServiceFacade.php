<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

/**
 * @method static traceless(string $captchaVerifyParam, string $scene = 'web')
 */
class CaptchaServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'CaptchaService';
    }
}