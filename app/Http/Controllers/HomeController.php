<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\History;

class HomeController extends Controller
{
    public function home() {
        return view('days.main-days');
    }
}
