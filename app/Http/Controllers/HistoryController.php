<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Histories;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function MasukkanHistoryDay1(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 1";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }

    public function MasukkanHistoryDay2(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 2";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay3(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 3";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay4(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 4";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay5(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 5";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay6(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 6";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay7(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 7";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay8(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 8";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay9(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 9";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay10(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 10";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay11(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 11";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay12(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 12";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay13(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 13";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay14(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 14";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay15(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 15";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay16(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 16";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay17(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 17";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay18(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 18";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay19(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 19";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay20(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 20";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay21(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 21";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay22(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 22";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay23(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 23";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay24(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 24";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay25(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 25";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay26(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 26";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay27(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 27";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay28(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 28";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay29(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 29";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
    public function MasukkanHistoryDay30(Request $request){
        $id_user = Auth::user()->id ;
        $hari = "Hari 30";
        $date = \Carbon\Carbon::now('Asia/Jakarta');
        $status = "Selesai";

        $history = new Histories;
        $history->id_user = $id_user;
        $history->hari = $hari;
        $history->date = $date;
        $history->status = $status;
        $history->time = (string)$request->time;
        $history->save();

        return redirect()->route('welcome');
    }
    
}
