<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\History;
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
        
        $histories = History::where('id_user', $id_user)->get();
        $view->with('history', $histories );
    }
}
