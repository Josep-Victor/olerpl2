<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function Categories1 () {
        return view('days-cat-1.main-days');
    }

    public function Categories2 () {
        return view('days-cat-2.main-days');
    }

    public function Categories3 () {
        return view('days-cat-3.main-days');
    }
}
