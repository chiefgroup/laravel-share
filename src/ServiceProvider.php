<?php

namespace ChiefGroup\LaravelShare;

use Hyperf\Jet\ClientFactory;
use Hyperf\Jet\DataFormatter\DataFormatter;
use Hyperf\Jet\Packer\JsonEofPacker;
use Hyperf\Jet\PathGenerator\PathGenerator;
use Hyperf\Jet\ProtocolManager;
use Hyperf\Jet\ServiceManager;
use Hyperf\Jet\Transporter\GuzzleHttpTransporter;
use Hyperf\Jet\Transporter\StreamSocketTransporter;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class ServiceProvider.
 *
 */
class ServiceProvider extends LaravelServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/qf_share.php' => config_path('qf_share.php')
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //注册协议
        ProtocolManager::register($protocol = 'jsonrpc-http', [
            ProtocolManager::TRANSPORTER    => new GuzzleHttpTransporter(),
            ProtocolManager::PACKER         => new JsonEofPacker(),
            ProtocolManager::PATH_GENERATOR => new PathGenerator(),
            ProtocolManager::DATA_FORMATTER => new DataFormatter(),
        ]);

        $clientFactory = new ClientFactory();

        $this->app->singleton('IdGeneratorService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'IdGeneratorService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);

            return $clientFactory->create($service = 'IdGeneratorService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('WsService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'WsService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'WsService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('WeightedRoundRobinService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'WeightedRoundRobinService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'WeightedRoundRobinService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('QiniuService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'QiniuService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'QiniuService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('AliyunService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'AliyunService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'AliyunService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('OperationLogService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'OperationLogService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'OperationLogService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('EncryptService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'EncryptService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'EncryptService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('SmsService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'SmsService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'SmsService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('OssService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'OssService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'OssService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('FlomoService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'FlomoService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'FlomoService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('DingtalkService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'DingtalkService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'DingtalkService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('SmoothWeightedRobin', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'SmoothWeightedRobin', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'SmoothWeightedRobin', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('BaiduBceService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'BaiduBceService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'BaiduBceService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('MapService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'MapService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'MapService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('NewDingtalkService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'NewDingtalkService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'NewDingtalkService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('OldDingtalkService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'OldDingtalkService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'OldDingtalkService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('JiSuService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'JiSuService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'JiSuService', $protocol = 'jsonrpc-http');
        });

        $this->app->singleton('CaptchaService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'CaptchaService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'CaptchaService', $protocol = 'jsonrpc-http');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'IdGeneratorService',
            'WsService',
            'WeightedRoundRobinService',
            'QiniuService',
            'AliyunService',
            'OperationLogService',
            'EncryptService',
            'SmsService',
            'OssService',
            'FlomoService',
            'DingtalkService',
            'SmoothWeightedRobin',
            'BaiduBceService',
            'MapService',
            'NewDingtalkService',
            'OldDingtalkService',
            'JiSuService',
            'CaptchaService'
        ];
    }

}