@extends('master')
    @section('extra-head')
        <script type="text/javascript" src='/js/js_exercise-6.js'></script>
        <link rel="stylesheet" href='/css/app.css'>
    @endsection
    @section('konten')
    <?php 
        $pushup = $pushup+1;
        $situp = $situp+1;
        $squat = $squat+1;
        $starjump = $starjump+1;
        $mountainclimber = $mountainclimber+1;
    ?>
        <section id="ole" class="day-one pb-5">
            <div class="container">          
                <div class="judul">
                    <div class="row pt-5">
                        <div class="col text-center text-white">
                        <h1>Day 4</h1>
                        <h3><i>{{ $judulhari4 }}</i></h3>
                        <center><hr color="white" width="200"></hr></center>
                        </div>
                    </div>
                    <div class="text-center mb-5">
                        <button type="button" class="button-mulai">
                            Mulai
                        </button>
                        <p>
                            <button type="button" class="button-kembali" style="height: 30px;width: 80px;margin-top: 20px; padding: 10px;">
                            <a href="{{ route('welcome') }}" style="text-decoration: none; color: inherit;">
                                <h6 style="font-size: 10px;">Kembali</h6>
                            </a>
                        </button>
                        </p>
                        <div class="waktu"></div>
                    </div>
                    <div class="row mb-4 ">
                        <div class="col">
                            <div class="exercise-1">
                                <div class="exercise-pushup">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('img/push-ups.jpg')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="card-text text-center">
                                                <p class="total-exercise">Push Up x ??</p>
                                                <p class="total-exercise-active">Push Up x {{ $pushup }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="exercise-2">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/sit-up.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Sit Up x ??</p>
                                            <p class="total-exercise-active">Sit Up x {{ $situp }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="exercise-3">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/squat.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Squat x ??</p>
                                            <p class="total-exercise-active">Squat x {{ $squat }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="exercise-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/Star Jump.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Star Jump x ??</p>
                                            <p class="total-exercise-active">Star Jump x {{ $starjump }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="exercise-5">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/cobra stretch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Cobra Stretch ??s </p>
                                            
                                            <p class="total-exercise-active">Cobra S. {{ $cobras }}s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col">
                            <div class="exercise-6 final-day-4">
                                <a href="#" data-toggle="modal" data-target="#selesaiDay4">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/mountain climber.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise"> Mountain C. x ??</p>
                                            <p class="total-exercise-active">Mountain C. x {{ $mountainclimber }} </p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 ">
                        <div class="col">
                            <div class="preview">
                                <div class="text-center">Preview</div>
                                <img class="img-preview" src="{{asset('img/push-ups.jpg')}}" style="width: 100%; opacity: 0;">
                                <img class="img-preview-2" src="{{asset('img/sit-up.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-3" src="{{asset('img/squat.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-4" src="{{asset('img/Star Jump.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-5" src="{{asset('img/cobra stretch.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-6" src="{{asset('img/mountain climber.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="selesaiDay4" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h1>SELESAI</h1>
                          </div>
                          <div class="modal-body">
                            <center>
                            <form action="{{ route('inputHistoryDay4') }}" >
                            <p>Selamat!</p>
                            <p>Kamu telah menyelesaikan olahraga hari 4 dengan waktu 
                            <input type="text" id="timer" name="time" class="form-control" style="width: 200px; text-align: center;" readonly="readonly"></p>
                            <p>Jangan lupa tekan tombol selesai untuk menyimpan hasil & jangan lupa untuk berolahraga lagi besok &#128513;</p>
                                <button type="submit" class="button-mulai-lagi">Mulai Lagi</button>
                                <button type="submit" class="selesai">Selesai</button>
                                </form>
                            </center>
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection