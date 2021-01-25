@extends('master')
    @section('extra-head')
        <script type="text/javascript" src='/js/js_categories.js'></script>
    @endsection
    @section('konten')
        <section id="ole" class="welcome pb-5">
            <div class="container">
                    <div class="judul">
                        <div class="row mb-5 pt-5">
                            <div class="col text-center text-white">
                                <h1>OLE</h1>
                                <h3><i>WELCOME</i></h3>
                                <center><hr color="white" width="200"></hr></center>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center text-white">
                            <p>Masukkan Berat Badan : <input type="text" class="bb"> kg</p>
                            <p>Masukkan Tinggi Badan : <input type="text" class="tb"> cm</p>
                            <button type="button" class="hitung">
                                Masukkan
                            </button>
                            <button type="button" class="reset">
                                Reset
                            </button>
                        </div>
                    </div>
                    <div class="notif-ideal">
                        <div class="row mb-5">
                            <div class="col text-center text-white">
                                <p>Berat badan ideal kamu adalah <div class="ideal">??</div> Kg</p>
                                <p>Untuk mencapai berat badan tersebut, Kamu perlu mengubah berat badan sebanyak <div class="skor"> ?? </div> Kg</p>
                                <p>Untuk membantu kamu mencapainya, kami sudah membuatkan jadwal olahraga yang sesuai</p>
                                <p>Silahkan Klik Link berikut <a href="#" class="kategori">Lanjut</a></p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    @endsection