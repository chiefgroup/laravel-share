# laravel-share

1. 在 config/app.php 注册 ServiceProvider 和 Facade (Laravel 5.5 + 无需手动注册)

```
'providers' => [
    // ...
    ChiefGroup\LaravelShare\ServiceProvider::class,
],
'aliases' => [
    // ...
    'WsService' => ChiefGroup\LaravelShare\WsServiceFacade::class,
],
```

2. 创建配置文件：php artisan vendor:publish --provider="ChiefGroup\LaravelShare\ServiceProvider"
3. 修改应用根目录下的 config/qf_share.php 中对应的参数即可。
