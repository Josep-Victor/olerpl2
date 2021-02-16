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
            ['exercise.day-1', 'exercise.day-2', 'exercise.day-3', 'exercise.day-4',
             'exercise.day-5', 'exercise.day-6', 'exercise.day-7', 'exercise.day-8',
             'exercise.day-9', 'exercise.day-10', 'exercise.day-11', 'exercise.day-12',
             'exercise.day-13', 'exercise.day-14', 'exercise.day-15', 'exercise.day-16',
             'exercise.day-17', 'exercise.day-18', 'exercise.day-19', 'exercise.day-20',
             'exercise.day-21', 'exercise.day-22', 'exercise.day-23', 'exercise.day-24',
             'exercise.day-25', 'exercise.day-26', 'exercise.day-27', 'exercise.day-28',
             'exercise.day-29', 'exercise.day-30'],
            DaftarOlahragaComposer::Class);
    }
}