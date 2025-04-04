<?php

namespace App\Providers;

use App\Models\Document;

use App\Models\User;
use App\Policies\documentPolicy;
use App\Policies\userPolicy;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider ;

class MyAuthServiceProvider extends AuthServiceProvider 
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $policies = [
        \App\Models\User::class => \App\Policies\UserPolicy::class,
    ];
    

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}