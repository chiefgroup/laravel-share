<?php


namespace ChiefGroup\LaravelShare;
use Illuminate\Support\Facades\Facade;

/**
 * Class OperationLogServiceFacade
 *
 * @method static array|callable save(array $data)
 * @method static array|callable bulk(array $data)
 * @method static array|callable search(string $project, array $search, array $searchAfter, array $sort, int $size = 50, int $operationType = 1)
 * @method static array|callable delDocuments(array $data)
 */
class OperationLogServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'OperationLogService';
    }
}