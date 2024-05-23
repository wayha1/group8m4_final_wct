<?php

namespace YourNamespace\ContactForm;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load the routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load the views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'contactform');

        // Publish the config file
        $this->publishes([
            __DIR__.'/../config/contactform.php' => config_path('contactform.php'),
        ]);
    }

    public function register()
    {
        // Merge configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/contactform.php', 'contactform'
        );
    }
}