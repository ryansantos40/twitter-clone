<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        $topUsers = Cache::remember('topUsers', 60 * 3, function () {
            return User::withCount('ideas') 
            -> orderBy('ideas_count', 'desc') 
            -> take(5)->get();
        });

        Gate::define('admin', function(User $user){
            return (bool) $user->is_admin;
        });

        View::share('topUsers', $topUsers);
    }
}
