<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class IdGeneratorServiceFacade
 *
 * @method static string id();
 */
class IdGeneratorServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'IdGeneratorService';
    }
}