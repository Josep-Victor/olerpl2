<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\DaftarOlahraga;
use Illuminate\Support\Facades\Auth;

class DaftarOlahragaComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $kategori = Auth::user()->kategori;

        $jumlahPushup = DaftarOlahraga::where('nama_olahraga', 'Push Up')->value('jumlah');
        if ($kategori == 1){
            $view->with('pushup', $jumlahPushup );
        }
        else if ($kategori == 2) {
            $jumlahPushup2 = $jumlahPushup + 2;
            $view->with('pushup', $jumlahPushup2 );
        } else if ($kategori == 3){
            $jumlahPushup3 = $jumlahPushup + 4;
            $view->with('pushup', $jumlahPushup3 );
        }

        $jumlahSitup = DaftarOlahraga::where('nama_olahraga', 'Sit Up')->get('jumlah');
        $view->with('situp', $jumlahSitup);

        $jumlahSquat = DaftarOlahraga::where('nama_olahraga', 'Squat')->get('jumlah');
        $view->with('squat', $jumlahSquat);

        $jumlahStarJump = DaftarOlahraga::where('nama_olahraga', 'Star Jump')->get('jumlah');
        $view->with('starjump', $jumlahStarJump);

        $jumlahCobraS = DaftarOlahraga::where('nama_olahraga', 'Cobra S.')->get('jumlah');
        $view->with('cobras', $jumlahCobraS);
    }
}
