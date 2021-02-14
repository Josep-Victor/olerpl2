<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Histories;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function MasukkanHistoryDay1(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 1";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }

    public function MasukkanHistoryDay2(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 2";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay3(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 3";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay4(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 4";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay5(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 5";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay6(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 6";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay7(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 7";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay8(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 8";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay9(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 9";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay10(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 10";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay11(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 11";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay12(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 12";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay13(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 13";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay14(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 14";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay15(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 15";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay16(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 16";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay17(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 17";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay18(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 18";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay19(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 19";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay20(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 20";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay21(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 21";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay22(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 22";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay23(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 23";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay24(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 24";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay25(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 25";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay26(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 26";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay27(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 27";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay28(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 28";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay29(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 29";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay30(){
        $id_user = Auth::user()->id ;
        $hari = "Hari 30";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new History;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->save();

        return redirect()->route('welcome');
    }
    
}
