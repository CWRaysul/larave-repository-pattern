<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UnitRepository;
use App\Repositories\Interfaces\UnitRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Repositories\interfaces\OrderRepositoryInterface;
use App\Repositories\SupplierRepository;
use App\Repositories\Interfaces\SupplierRepositoryInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UnitRepositoryInterface::class, UnitRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(SupplierRepositoryInterface::class, SupplierRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
