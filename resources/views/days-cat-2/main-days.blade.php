@extends('master')
    @section('extra-head')
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src='/js/js_categories.js'></script>
        @endsection
        @section('konten')
        <section id="ole" class="section-index pb-5">
            <div class="container">
                <div class="judul">
                    <div class="row mb-5 pt-5">
                        <div class="col text-center text-white">
                            <h1 styl="font-family: Sport">Kalender Olahraga</h1>
                            <h3 style="font-family: DancingScript; letter-spacing: 0.125rem;">Selamat datang kembali, {{ Auth::user()-> name}} !</h3>
                        </div>
                    </div>
                </div>

                @include('days-cat-2.1-5')
                @include('days-cat-2.6-10')
                @include('days-cat-2.11-15')
                @include('days-cat-2.16-20')
                @include('days-cat-2.21-25')
                @include('days-cat-2.26-30')
                <span></span>
                <center>
                        <h3><i>"Every day is a chance to get better"</i></h3>
                </center>
            </div>
        </section>
        @endsection