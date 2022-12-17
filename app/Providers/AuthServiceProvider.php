<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
         'App\Models\Post' => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // define gate for admin
        Gate::define('isAdmin', function($user){
            return $user->role == 'admin';
        });

        // define gate for user
        Gate::define('isUser', function($user){
            return $user->role == 'user';
        });

        // define gate for editor
        Gate::define('isEditor', function($user){
            return $user->role == 'editor';
        });
    }
}
