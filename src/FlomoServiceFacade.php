<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class FlomoServiceFacade
 *
 * @method static void publish(string $content);
 */
class FlomoServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'FlomoService';
    }
}