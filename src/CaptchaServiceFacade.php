<?php

namespace ChiefGroup\LaravelShare;

use Illuminate\Support\Facades\Facade;

class CaptchaServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'CaptchaService';
    }
}