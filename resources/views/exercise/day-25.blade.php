@extends('master')
    @section('extra-head')
    <script type="text/javascript" src='/js/js_exercise-13.js'></script>
        <link rel="stylesheet" href='/css/app.css'>
    @endsection
    @section('konten')
    <?php 
        $pushup = $pushup+12;
        $situp = $situp+12;
        $squat = $squat+12;
        $starjump = $starjump+12;
        $mountainclimber = $mountainclimber+12;
        $cobras = $cobras+20;
        $lunges = $lunges+12;
        $russiantwist = $russiantwist+12;
        $hipraises = $hipraises+12;
        $plank = $plank+10;
        $sideplank = $sideplank+10;
        $heeltouch = $heeltouch+12;
    ?>
        <section id="ole" class="day-one pb-5">
            <div class="container">          
                <div class="judul">
                    <div class="row pt-5">
                        <div class="col text-center text-white">
                        <h1>Day 25</h1>
                        <h3><i>Push-up, Sit-up, Squat, Jumping jack</i></h3>
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
                        <div class="col-md">
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
                        <div class="col-md">
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
                        <div class="col-md">
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
                        <div class="col-md">
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
                        <div class="col-md">
                            <div class="exercise-5">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/cobra stretch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Cobra Stretch ??s</p>
                                            <p class="total-exercise-active">Cobra S. {{ $cobras }}s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md">
                            <div class="exercise-6">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/mountain climber.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Mountain C. ??</p>
                                            <p class="total-exercise-active">Mountain C. x {{ $mountainclimber }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-7">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/Lunges.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Lunges ??</p>
                                            <p class="total-exercise-active">Lunges x {{ $lunges }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-8">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/russian twist.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Russian Twist ??</p>
                                            <p class="total-exercise-active">Russian Twist x {{ $russiantwist }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-9">
                                <div class="card">                                   
                                    <img class="card-img-top" src="{{asset('img/plank.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                        <p class="total-exercise"> Plank ??s</p>
                                            <p class="total-exercise-active">Plank. x {{ $plank }}s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-10">
                                <div class="card">                                   
                                    <img class="card-img-top" src="{{asset('img/Side Plank.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Side Plank ??s</p>
                                            <p class="total-exercise-active">Side Plank. x {{ $sideplank }}s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                    <div class="col-md">
                            <div class="exercise-11">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/Hip Raises.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Hip Raises ??</p>
                                            <p class="total-exercise-active">Hip Raises x {{ $hipraises }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-12">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/Cobra Stretch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Cobra Stretch ??s</p>
                                            <p class="total-exercise-active">Cobra S. x {{ $cobrastretch }}s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-13 final-day-25">
                                <a href="#" data-toggle="modal" data-target="#selesaiDay25">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/heel touch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">heel touch??</p>
                                            <p class="total-exercise-active">heel touch x {{ $heeltouch }} </p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-14">
                                <div class="card" style="opacity:0;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-15">
                                <div class="card" style="opacity:0;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 ">
                        <div class="col-md">
                            <div class="preview">
                                <div class="text-center">Preview</div>
                                <img class="img-preview" src="{{asset('img/push-ups.jpg')}}" style="width: 100%; opacity: 0;">
                                <img class="img-preview-2" src="{{asset('img/sit-up.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-3" src="{{asset('img/squat.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-4" src="{{asset('img/Star Jump.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-5" src="{{asset('img/cobra stretch.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-6" src="{{asset('img/mountain climber.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-7" src="{{asset('img/Lunges.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-8" src="{{asset('img/russian twist.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-9" src="{{asset('img/plank.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-10" src="{{asset('img/Side Plank.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-11" src="{{asset('img/Hip Raises.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-12" src="{{asset('img/cobra stretch.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                                <img class="img-preview-13" src="{{asset('img/heel touch.jpg')}}" style="width: 0; height: 0; opacity: 0; visibility: hidden;">
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="selesaiDay25" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h1>SELESAI</h1>
                          </div>
                          <div class="modal-body">
                            <center>
                            <form action="{{ route('inputHistoryDay25') }}" >
                            <p>Selamat!</p>
                            <p>Kamu telah menyelesaikan olahraga hari 25 dengan waktu 
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
            </div>
        </section>
        @endsection