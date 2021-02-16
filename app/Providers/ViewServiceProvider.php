<?php

namespace App\Providers;

use App\Http\View\Composers\HistoryComposer;
use App\Http\View\Composers\DaftarOlahragaComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            ['history', 'profile', 'days.reminder'],
             HistoryComposer::class);
        
        View::composer(
            ['exercise.day-1', 'exercise.day-2'],
            DaftarOlahragaComposer::Class);
    }
}