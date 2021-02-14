@extends('master')
    @section('extra-head')
        <script type="text/javascript" src='/js/js_exercise-8.js'></script>
        <link rel="stylesheet" href='/css/app.css'>
    @endsection
    @section('konten')
    <?php 
        $jumlahExercise = 10;
        $jumlahWaktu = 20;
        $kategori = Auth::user()->kategori;
        if ($kategori == 2){
            $jumlahWaktu = $jumlahWaktu + 2;
            $jumlahExercise = $jumlahExercise + 2;
        } else if ($kategori == 3){
            $jumlahWaktu = $jumlahWaktu + 4;
            $jumlahExercise = $jumlahExercise + 4;
        }
    ?>
        <section id="ole" class="day-one pb-5">
            <div class="container">          
                <div class="judul">
                    <div class="row pt-5">
                        <div class="col text-center text-white">
                        <h1>Day 12</h1>
                        <h3><i>Push-up, Sit-up, Squat, Jumping jack</i></h3>
                        <center><hr color="white" width="200"></hr></center>
                        </div>
                    </div>
                    <div class="text-center mb-5">
                        <button type="button" class="button-mulai">
                            Mulai
                        </button>
                        <p>
                            <a href="{{ route('welcome') }}"><h6>Kembali</h6></a>
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
                                                <p class="total-exercise-active">Push Up x {{ $jumlahExercise }} </p>
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
                                            <p class="total-exercise-active">Sit Up x {{ $jumlahExercise }} </p>
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
                                            <p class="total-exercise-active">Squat x {{ $jumlahExercise }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/pull-up.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Star Jump x ??</p>
                                            <p class="total-exercise-active">Star Jump x {{ $jumlahExercise }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-5">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('img/Cobra Stretch.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Cobra Stretch ??s</p>
                                            <p class="total-exercise-active">Cobra S. {{ $jumlahWaktu }}s</p>
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
                                            <p class="total-exercise-active"> Mountain C. X {{ $jumlahExercise }} </p>
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
                                            <p class="total-exercise-active">Lunges X {{ $jumlahExercise }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-8 final-day-12">
                                <div class="card">                                    
                                    <img class="card-img-top" src="{{asset('img/rusian twist.webp')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <p class="total-exercise">Russian Twist ??</p>
                                            <p class="total-exercise-active">Russian Twist X {{ $jumlahExercise }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-9">
                                <div class="card" style="opacity:0;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="exercise-10">
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
                            </div>
                        </div>
                    </div>
                    <div class="penutup">
                        selamat!
                        Kamu telah menyelesaikan olahraga hari ini
                        <form action="{{ route('inputHistoryDay12') }}" >
                            <button type="submit" class="button-mulai-lagi">Mulai Lagi</button>
                            <button type="submit" class="selesai">Selesai</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endsection