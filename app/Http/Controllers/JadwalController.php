<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class JadwalController extends Controller
{
    public function Hari_1 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-1');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-1');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-1');
        }
    }
    
    public function Hari_2 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-2');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-2');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-2');
        }
    }
    
    public function Hari_3 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-3');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-3');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-3');
        }
    }
    
    public function Hari_4 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-4');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-4');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-4');
        }
    }
    
    public function Hari_5 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-5');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-5');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-5');
        }
    }
    
    public function Hari_6 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-6');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-6');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-6');
        }
    }
    
    public function Hari_7 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-7');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-7');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-7');
        };
    }
    
    public function Hari_8 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-8');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-8');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-8');
        }
    }
    
    public function Hari_9 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-9');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-9');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-9');
        }
    }
    
    public function Hari_10 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-10');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-10');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-10');
        }
    }
    
    public function Hari_11 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-11');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-11');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-11');
        }
    }
    
    public function Hari_12 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-12');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-12');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-12');
        }
    }
    
    public function Hari_13 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-13');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-13');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-13');
        }
    }
    
    public function Hari_14 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-14');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-14');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-14');
        }
    }
    
    public function Hari_15 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-15');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-15');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-15');
        }
    }
    
    public function Hari_16 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-16');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-16');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-16');
        }
    }
    
    public function Hari_17 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-17');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-17');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-17');
        }
    }
    
    public function Hari_18 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-18');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-18');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-18');
        }
    }
    
    public function Hari_19 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-19');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-19');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-19');
        }
    }
    
    public function Hari_20 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-20');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-20');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-20');
        }
    }
    
    public function Hari_21 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-21');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-21');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-21');
        }
    }
    
    public function Hari_22 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-22');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-22');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-22');
        }
    }
    
    public function Hari_23 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-23');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-23');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-23');
        }
    }
    
    public function Hari_24 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-24');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-24');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-24');
        }
    }
    
    public function Hari_25 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-25');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-25');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-25');
        }
    }
    
    public function Hari_26 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-26');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-26');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-26');
        }
    }
    
    public function Hari_27 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-27');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-27');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-27');
        }
    }
    
    public function Hari_28 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-28');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-28');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-28');
        }
    }
    
    public function Hari_29 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-29');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-29');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-29');
        }
    }
    
    public function Hari_30 () {
        if(Auth::user()->kategori == 1){
            return view('exercise-cat-1.day-30');
        } else if(Auth::user()->kategori == 2){
            return view('exercise-cat-2.day-30');
        }else if(Auth::user()->kategori == 3){
            return view('exercise-cat-3.day-30');
        }
    }
}
