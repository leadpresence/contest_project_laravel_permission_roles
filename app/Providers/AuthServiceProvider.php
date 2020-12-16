<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        //create  gates to create policies and implement gaurd
      
        //typically for admin

        Gate::define('edit_users',function($user){
            return $user->hasRole(['admin']);
        });

        Gate::define('manage_users',function($user){
            return $user->hasAnyRoles(['admin','judge']);
        });

        Gate::define('delete_users',function($user){
            return $user->hasRole(['admin']);
        });
 
         //user
        // Gate::define('view_profile',function($user){
        //     return $user->hasRole(['user']);
        // });


        //typically for judges roles
        Gate::define('accept_challenge',function($user){    
            return $user->hasAnyRoles(['admin','judge']);
        });
        
        //typically for users or candidates

        Gate::define('can_apply',function($user){
            return $user->hasRole(['user','admin']);
        });

     
    }
}
