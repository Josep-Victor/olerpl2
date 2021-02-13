<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class LihatHistoryController 
{
    
    public function LihatHistory(View $view){
        $id_user = Auth::user()->id;
        
        $histories = History::where('id_user', $id_user)->get();
        $view->with('history',compact('histories'));
    }

}
