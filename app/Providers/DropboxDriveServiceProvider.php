<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                $config['add_authorization_token']
            );
  
            return new Filesystem(new DropboxAdapter($client));
        });
    }
}