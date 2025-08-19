<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class TingWuServiceFacade
 *
 * @method static mixed createTask(string $fileUrl)
 * @method static mixed getTaskInfo(string $taskId)
 */
class TingWuServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'TingWuService';
    }
}