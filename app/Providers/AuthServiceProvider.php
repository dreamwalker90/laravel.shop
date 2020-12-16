<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\Product;
use App\Policies\ProductPolicy;
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
//         'App\Model' => 'App\Policies\ModelPolicy',
        Product::class=>ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
            foreach ($this->getPermissions() as $permission) {
        Gate::define($permission->name,function ($user) use($permission){
            return $user->hasRole($permission->roles);
        });
            }

    }
    public function getPermissions(){
        return Permission::with('roles')->get();

    }
}
