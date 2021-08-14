<?php
namespace ChiefGroup\LaravelShare;

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
            __DIR__.'/config.php' => config_path('qf_share.php')
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
            ProtocolManager::TRANSPORTER => new StreamSocketTransporter(),
            ProtocolManager::PACKER => new JsonEofPacker(),
            ProtocolManager::PATH_GENERATOR => new PathGenerator(),
            ProtocolManager::DATA_FORMATTER => new DataFormatter(),
        ]);

        ProtocolManager::register($protocol = 'jsonrpc-http', [
            ProtocolManager::TRANSPORTER => new GuzzleHttpTransporter(),
            ProtocolManager::PACKER => new JsonEofPacker(),
            ProtocolManager::PATH_GENERATOR => new PathGenerator(),
            ProtocolManager::DATA_FORMATTER => new DataFormatter(),
        ]);

        $clientFactory = new ClientFactory();

        $this->app->singleton('IdGeneratorService', function ($app) use($clientFactory) {
            ServiceManager::register($service = 'IdGeneratorService', $protocol = 'jsonrpc-http', [
                ServiceManager::NODES => [
                    [$host = config('qf_share.node.host'), $port = config('qf_share.node.port_http')],
                ],
            ]);

            return $clientFactory->create($service = 'IdGeneratorService', $protocol = 'jsonrpc-http');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['IdGeneratorService'];
    }

}