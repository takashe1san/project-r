<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

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
        Validator::extend('single_word', function ($attribute, $value, $parameters, $validator) {
            return is_string($value) && ! preg_match('/\s/u', $value);
        }, 'this field must be a single word');
    }
}
