<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 6/28/19
 * Time: 3:14 PM
 */

namespace App\Providers;


use App\Service\AuthSaf\AuthSafInterface;
use App\Service\AuthSaf\AuthSafService;
use App\Service\AuthSaf\AuthSafV2Service;
use Illuminate\Support\ServiceProvider;

class AuthenSafServiceProvider extends ServiceProvider
{
    public function boot()
    {
        return 'tienvm';
    }

    public function register()
    {
        $this->app->bind(AuthSafInterface::class, AuthSafV2Service::class);
        $this->app->bind(AuthSafInterface::class, AuthSafService::class);
    }
}