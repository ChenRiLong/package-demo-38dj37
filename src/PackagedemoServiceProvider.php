<?php

namespace Chuhai\Packagedemo;

use Illuminate\Support\ServiceProvider;

class PackagedemoServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true; // 延迟加载服务

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/packagedemo.php' => config_path('packagedemo.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('packagedemo', function ($app) {
            return new Packagedemo($app['session'], $app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['packagedemo'];
    }
}
