<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\DaftarHari;
use Illuminate\Support\Facades\Auth;

class DaftarHariComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $hari1 = DaftarHari::where('id','1')->value('hari');
        $view->with('hari1', $hari1);

        $hari2 = DaftarHari::where('id','2')->value('hari');
        $view->with('hari2', $hari2);

        $hari3 = DaftarHari::where('id','3')->value('hari');
        $view->with('hari3', $hari3);

        $hari4 = DaftarHari::where('id','4')->value('hari');
        $view->with('hari4', $hari4);

        $hari5 = DaftarHari::where('id','5')->value('hari');
        $view->with('hari5', $hari5);

        $hari6 = DaftarHari::where('id','6')->value('hari');
        $view->with('hari6', $hari6);

        $hari7 = DaftarHari::where('id','7')->value('hari');
        $view->with('hari7', $hari7);

        $hari8 = DaftarHari::where('id','8')->value('hari');
        $view->with('hari8', $hari8);

        $hari9 = DaftarHari::where('id','9')->value('hari');
        $view->with('hari9', $hari9);
        
        $hari10 = DaftarHari::where('id','10')->value('hari');
        $view->with('hari10', $hari10);

        $hari11 = DaftarHari::where('id','11')->value('hari');
        $view->with('hari11', $hari11);

        $hari12 = DaftarHari::where('id','12')->value('hari');
        $view->with('hari12', $hari12);

        $hari13 = DaftarHari::where('id','13')->value('hari');
        $view->with('hari13', $hari13);

        $hari14 = DaftarHari::where('id','14')->value('hari');
        $view->with('hari14', $hari14);

        $hari15 = DaftarHari::where('id','15')->value('hari');
        $view->with('hari15', $hari15);

        $hari16 = DaftarHari::where('id','16')->value('hari');
        $view->with('hari16', $hari16);

        $hari17 = DaftarHari::where('id','17')->value('hari');
        $view->with('hari17', $hari17);

        $hari18 = DaftarHari::where('id','18')->value('hari');
        $view->with('hari18', $hari18);

        $hari19 = DaftarHari::where('id','19')->value('hari');
        $view->with('hari19', $hari19);

        $hari20 = DaftarHari::where('id','20')->value('hari');
        $view->with('hari20', $hari20);

        $hari21 = DaftarHari::where('id','21')->value('hari');
        $view->with('hari21', $hari21);

        $hari22 = DaftarHari::where('id','22')->value('hari');
        $view->with('hari22', $hari22);

        $hari23 = DaftarHari::where('id','23')->value('hari');
        $view->with('hari23', $hari23);

        $hari24 = DaftarHari::where('id','24')->value('hari');
        $view->with('hari24', $hari24);

        $hari25 = DaftarHari::where('id','25')->value('hari');
        $view->with('hari25', $hari25);

        $hari26 = DaftarHari::where('id','26')->value('hari');
        $view->with('hari26', $hari26);

        $hari27 = DaftarHari::where('id','27')->value('hari');
        $view->with('hari27', $hari27);

        $hari28 = DaftarHari::where('id','28')->value('hari');
        $view->with('hari28', $hari28);

        $hari29 = DaftarHari::where('id','29')->value('hari');
        $view->with('hari29', $hari29);

        $hari30 = DaftarHari::where('id','30')->value('hari');
        $view->with('hari30', $hari30);
        
        $judulhari1 = DaftarHari::where('id','1')->value('daftar_olahraga');
        $view->with('judulhari1', $judulhari1);

        $judulhari2 = DaftarHari::where('id','2')->value('daftar_olahraga');
        $view->with('judulhari2', $judulhari2);

        $judulhari3 = DaftarHari::where('id','3')->value('daftar_olahraga');
        $view->with('judulhari3', $judulhari3);

        $judulhari4 = DaftarHari::where('id','4')->value('daftar_olahraga');
        $view->with('judulhari4', $judulhari4);

        $judulhari5 = DaftarHari::where('id','5')->value('daftar_olahraga');
        $view->with('judulhari5', $judulhari5);

        $judulhari6 = DaftarHari::where('id','6')->value('daftar_olahraga');
        $view->with('judulhari6', $judulhari6);

        $judulhari7 = DaftarHari::where('id','7')->value('daftar_olahraga');
        $view->with('judulhari7', $judulhari7);

        $judulhari8 = DaftarHari::where('id','8')->value('daftar_olahraga');
        $view->with('judulhari8', $judulhari8);

        $judulhari9 = DaftarHari::where('id','9')->value('daftar_olahraga');
        $view->with('judulhari9', $judulhari9);
        
        $judulhari10 = DaftarHari::where('id','10')->value('daftar_olahraga');
        $view->with('judulhari10', $judulhari10);

        $judulhari11 = DaftarHari::where('id','11')->value('daftar_olahraga');
        $view->with('judulhari11', $judulhari11);

        $judulhari12 = DaftarHari::where('id','12')->value('daftar_olahraga');
        $view->with('judulhari12', $judulhari12);

        $judulhari13 = DaftarHari::where('id','13')->value('daftar_olahraga');
        $view->with('judulhari13', $judulhari13);

        $judulhari14 = DaftarHari::where('id','14')->value('daftar_olahraga');
        $view->with('judulhari14', $judulhari14);

        $judulhari15 = DaftarHari::where('id','15')->value('daftar_olahraga');
        $view->with('judulhari15', $judulhari15);

        $judulhari16 = DaftarHari::where('id','16')->value('daftar_olahraga');
        $view->with('judulhari16', $judulhari16);

        $judulhari17 = DaftarHari::where('id','17')->value('daftar_olahraga');
        $view->with('judulhari17', $judulhari17);

        $judulhari18 = DaftarHari::where('id','18')->value('daftar_olahraga');
        $view->with('judulhari18', $judulhari18);

        $judulhari19 = DaftarHari::where('id','19')->value('daftar_olahraga');
        $view->with('judulhari19', $judulhari19);

        $judulhari20 = DaftarHari::where('id','20')->value('daftar_olahraga');
        $view->with('judulhari20', $judulhari20);

        $judulhari21 = DaftarHari::where('id','21')->value('daftar_olahraga');
        $view->with('judulhari21', $judulhari21);

        $judulhari22 = DaftarHari::where('id','22')->value('daftar_olahraga');
        $view->with('judulhari22', $judulhari22);

        $judulhari23 = DaftarHari::where('id','23')->value('daftar_olahraga');
        $view->with('judulhari23', $judulhari23);

        $judulhari24 = DaftarHari::where('id','24')->value('daftar_olahraga');
        $view->with('judulhari24', $judulhari24);

        $judulhari25 = DaftarHari::where('id','25')->value('daftar_olahraga');
        $view->with('judulhari25', $judulhari25);

        $judulhari26 = DaftarHari::where('id','26')->value('daftar_olahraga');
        $view->with('judulhari26', $judulhari26);

        $judulhari27 = DaftarHari::where('id','27')->value('daftar_olahraga');
        $view->with('judulhari27', $judulhari27);

        $judulhari28 = DaftarHari::where('id','28')->value('daftar_olahraga');
        $view->with('judulhari28', $judulhari28);

        $judulhari29 = DaftarHari::where('id','29')->value('daftar_olahraga');
        $view->with('judulhari29', $judulhari29);

        $judulhari30 = DaftarHari::where('id','30')->value('daftar_olahraga');
        $view->with('judulhari30', $judulhari30);
    }
}
