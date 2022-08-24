<?php

namespace App\Providers;

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
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // システム管理者
        Gate::define('admin', function ($user) {
            return ($user->role === 999);
        });
        // 出店者管理者以上に許可
        Gate::define('shopadmin', function ($user) {
            return ($user->role >= 1 && $user->role <= 10);
        });
        // 一般利用客に許可
        Gate::define('user', function ($user) {
            return ($user->role > 10 && $user->role <= 100);
        });
        //
    }
}
