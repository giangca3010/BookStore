<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 6/28/19
 * Time: 2:03 PM
 */

namespace App\Providers;

use App\Service\Auth\AuthService;
use App\Service\Auth\AuthServiceInterface;
use Illuminate\Support\ServiceProvider;

class AuthBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd(2);
    }

    public function register()
    {
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
    }
}