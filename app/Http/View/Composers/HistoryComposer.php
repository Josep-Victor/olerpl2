<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Histories;
use Illuminate\Support\Facades\Auth;

class HistoryComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $id_user = Auth::user()->id;
        
        $histories = Histories::where('id_user', $id_user)->get();
        $view->with('history', $histories );

        $last_dates = Histories::where('id_user', $id_user)->orderBy('date', 'DESC')->get('date')->take(1);
        $view->with('last_date', $last_dates);

        $last_days = Histories::where('id_user', $id_user)->orderBy('date', 'DESC')->get('hari')->take(1);
        $view->with('last_day', $last_days);
    }
}
