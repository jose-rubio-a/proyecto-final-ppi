<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Compra;
use App\Models\Publicacion;
use App\Models\Temporada;
use App\Models\User;
use App\Policies\PublicacionPolicy;
use App\Policies\TemporadaPolicy;
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
        Publicacion::class => PublicacionPolicy::class,
        Temporada::class => TemporadaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            if($user->admin == 1){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define('creador_admin', function(User $user, Compra $compra){
            if($user->admin == 1 or $user->id == $compra->user_id){
                return true;
            }
            else{
                return false;
            }
        });
    }
}
