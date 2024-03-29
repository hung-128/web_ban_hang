<?php

namespace App\Providers;

use App\Repositories\IRolePermissionRepository;
use App\Repositories\Repo\RolePermissionRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        IRolePermissionRepository::class => RolePermissionRepository::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
