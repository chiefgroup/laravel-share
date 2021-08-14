<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade as LaravelFacade;

class IdGeneratorServiceFacade extends LaravelFacade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'qf.share';
    }
}