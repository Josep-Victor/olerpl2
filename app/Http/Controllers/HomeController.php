<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home() {
        if(Auth::user()->kategori == 1){
            return view('days-cat-1.main-days');
        } else if(Auth::user()->kategori == 2){
            return view('days-cat-2.main-days');
        }else if(Auth::user()->kategori == 3){
            return view('days-cat-3.main-days');
        }
    }
}
