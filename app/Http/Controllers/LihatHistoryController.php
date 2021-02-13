<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class LihatHistoryController extends Controller
{
    
    public function LihatHistory(){
        $id_user = Auth::user()->id;
        
        $histories = History::where('id_user', $id_user)->get();
        return view('history',compact('histories'));
    }

}
