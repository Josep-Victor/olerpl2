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
        $jumlahSitup = DaftarOlahraga::where('nama_olahraga', 'Sit Up')->value('jumlah');
        $jumlahSquat = DaftarOlahraga::where('nama_olahraga', 'Squat')->value('jumlah');
        $jumlahStarJump = DaftarOlahraga::where('nama_olahraga', 'Star Jump')->value('jumlah');
        $jumlahCobraS = DaftarOlahraga::where('nama_olahraga', 'Cobra S.')->value('jumlah');
        $jumlahMountainC = DaftarOlahraga::where('nama_olahraga', 'Mountain C.')->value('jumlah');
        $jumlahLunges = DaftarOlahraga::where('nama_olahraga','Lunges')->value('jumlah');
        $jumlahRussianTwist = DaftarOlahraga::where('nama_olahraga','Russian Twist')->value('jumlah');
        $jumlahPlank = DaftarOlahraga::where('nama_olahraga','Plank')->value('jumlah');
        $jumlahSidePlank = DaftarOlahraga::where('nama_olahraga','Side Plank')->value('jumlah');
        $jumlahHipRaises = DaftarOlahraga::where('nama_olahraga','Hip Raises')->value('jumlah');
        $jumlahCobraStretch = DaftarOlahraga::where('nama_olahraga','Cobra Stretch')->value('jumlah');
        $jumlahHeelTouch = DaftarOlahraga::where('nama_olahraga','Heel Touch')->value('jumlah');
        $jumlahPushUpWR = DaftarOlahraga::where('nama_olahraga','Push-Ups W.R')->value('jumlah');

        if ($kategori == 1){
            $view->with('pushup', $jumlahPushup );
            $view->with('situp', $jumlahSitup);
            $view->with('squat', $jumlahSquat);
            $view->with('starjump', $jumlahStarJump);
            $view->with('cobras', $jumlahCobraS);
            $view->with('mountainclimber', $jumlahMountainC);
            $view->with('lunges', $jumlahLunges);
            $view->with('russiantwist', $jumlahRussianTwist);
            $view->with('plank', $jumlahPlank);
            $view->with('sideplank', $jumlahSidePlank);
            $view->with('hipraises', $jumlahHipRaises);
            $view->with('cobrastretch', $jumlahCobraStretch);
            $view->with('heeltouch', $jumlahHeelTouch);
            $view->with('pushupwr', $jumlahPushUpWR);
        }
        else if ($kategori == 2) {
            $jumlahPushup2 = $jumlahPushup + 2;
            $view->with('pushup', $jumlahPushup2 );

            $jumlahSitup2 = $jumlahSitup + 2;
            $view->with('situp', $jumlahSitup2);

            $jumlahSquat2 = $jumlahSquat + 2;
            $view->with('squat', $jumlahSquat2);
            
            $jumlahStarJump2 = $jumlahStarJump + 2;
            $view->with('starjump', $jumlahStarJump2);
            
            $jumlahCobraS2 = $jumlahCobraS + 2;
            $view->with('cobras', $jumlahCobraS2);
            
            $jumlahMountainC2 = $jumlahMountainC + 2;
            $view->with('mountainclimber', $jumlahMountainC2);
            
            $jumlahLunges2 = $jumlahLunges + 2;
            $view->with('lunges', $jumlahLunges2);
            
            $jumlahRussianTwist2 = $jumlahRussianTwist + 2;
            $view->with('russiantwist', $jumlahRussianTwist2);
            
            $jumlahPlank2 = $jumlahPlank + 5;
            $view->with('plank', $jumlahPlank2);
            
            $jumlahSidePlank2 = $jumlahSidePlank + 5;
            $view->with('sideplank', $jumlahSidePlank2);
            
            $jumlahHipRaises2 = $jumlahHipRaises + 2;
            $view->with('hipraises', $jumlahHipRaises2);
            
            $jumlahCobraStretch2 = $jumlahCobraStretch + 2;
            $view->with('cobrastretch', $jumlahCobraStretch2);
            
            $jumlahHeelTouch2 = $jumlahHeelTouch + 2;
            $view->with('heeltouch', $jumlahHeelTouch2);
            
            $jumlahPushUpWR2 = $jumlahPushUpWR + 2;
            $view->with('pushupwr', $jumlahPushUpWR2);
        } 
        else if ($kategori == 3){
            $jumlahPushup3 = $jumlahPushup + 4;
            $view->with('pushup', $jumlahPushup3 );
            
            $jumlahSitup3 = $jumlahSitup + 4;
            $view->with('situp', $jumlahSitup3);
            
            $jumlahSquat3 = $jumlahSquat + 4;
            $view->with('squat', $jumlahSquat3);
            
            $jumlahStarJump3 = $jumlahStarJump + 4;
            $view->with('starjump', $jumlahStarJump3);

            $jumlahCobraS3 = $jumlahCobraS + 4;
            $view->with('cobras', $jumlahCobraS3);
            
            $jumlahMountainC3 = $jumlahMountainC + 4;
            $view->with('mountainclimber', $jumlahMountainC3);
            
            $jumlahLunges3 = $jumlahLunges + 4;
            $view->with('lunges', $jumlahLunges3);
            
            $jumlahRussianTwist3 = $jumlahRussianTwist + 4;
            $view->with('russiantwist', $jumlahRussianTwist3);
            
            $jumlahPlank3 = $jumlahPlank + 10;
            $view->with('plank', $jumlahPlank3);
            
            $jumlahSidePlank3 = $jumlahSidePlank + 10;
            $view->with('sideplank', $jumlahSidePlank3);
            
            $jumlahHipRaises3 = $jumlahHipRaises + 4;
            $view->with('hipraises', $jumlahHipRaises3);
            
            $jumlahCobraStretch3 = $jumlahCobraStretch + 4;
            $view->with('cobrastretch', $jumlahCobraStretch3);
            
            $jumlahHeelTouch3 = $jumlahHeelTouch + 4;
            $view->with('heeltouch', $jumlahHeelTouch3);
            
            $jumlahPushUpWR3 = $jumlahPushUpWR + 4;
            $view->with('pushupwr', $jumlahPushUpWR3);
        }
    }
}
