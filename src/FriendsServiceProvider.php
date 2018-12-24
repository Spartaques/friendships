<?php


namespace Spartaques\FriendsPackage;


use Illuminate\Support\ServiceProvider;

class FriendsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->mergeConfigFrom(__DIR__.'/../config/friendships.php', 'friendships');
    }
}
