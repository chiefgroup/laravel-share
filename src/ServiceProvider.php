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
            __DIR__ . '/config.php' => config_path('qf_share.php')
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
        ProtocolManager::register($protocol = 'jsonrpc', [
            ProtocolManager::TRANSPORTER    => new StreamSocketTransporter(),
            ProtocolManager::PACKER         => new JsonEofPacker(),
            ProtocolManager::PATH_GENERATOR => new PathGenerator(),
            ProtocolManager::DATA_FORMATTER => new DataFormatter(),
        ]);

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

        $this->app->singleton('SmsCallbackLogService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'SmsCallbackLogService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);
            return $clientFactory->create($service = 'SmsCallbackLogService', $protocol = 'jsonrpc-http');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['IdGeneratorService', 'WsService', 'WeightedRoundRobinService', 'QiniuService', 'AliyunService','SmsCallbackLogService'];
    }

}