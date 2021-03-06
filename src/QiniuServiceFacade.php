<?php


namespace ChiefGroup\LaravelShare;


use Illuminate\Support\Facades\Facade;

/**
 * Class BucketService
 * @package App\Facade
 *
 * @method static array uploadToken($dir, $isPrivate);
 * @method static array downloadUrl($url, $expires);
 * @method static array downloadUrlForMany($urls, $expires);
 * @method static mixed bucketDomains($isPrivate);
 * @method static mixed smsSend(string $templateId, array $mobiles,  array $params = [])
 * @method static mixed smsIsFrequently($mobile, string $templateId)
 * @method static mixed cndRefreshUrls($urls)
 * @method static string getPublicDownloadUrl($urls)
 * @method static string smsCallbackLogSave(array $data)
 * @method static mixed smsCallbackLogSearch(array $condition,int $page = 1,int $pageSize = 20)
 */
class QiniuServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'QiniuService';
    }
}