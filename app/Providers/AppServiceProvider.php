<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
USE illuminate\Support\Facades\View;    //added by us
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
        view()-> share('LPU',"LOVELY PROFESSIONAL UNIVERSITY");
    }
}
