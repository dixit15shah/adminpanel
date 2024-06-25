<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Evolutionco\Repositories\UserRepositoryInterface;
use Evolutionco\Repositories\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
