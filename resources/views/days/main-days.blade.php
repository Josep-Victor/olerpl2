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
                            <h1 style="font-family: Sport">Kalender Olahraga</h1>
                            <h3 style="font-family: DancingScript; letter-spacing: 0.125rem;">Selamat datang kembali, {{ Auth::user()-> name}} !</h3>
                        </div>
                    </div>
                </div>

                @include('days.1-5')
                @include('days.6-10')
                @include('days.11-15')
                @include('days.16-20')
                @include('days.21-25')
                @include('days.26-30')
                <span></span>
                <center>
                        <h3 style="font-family: DancingScript;"><i>"Every day is a chance to get better"</i></h3>
                </center>
            </div>
        </section>
            <a href="http://livetrafficfeed.com" data-num="10" data-width="210" 
            data-responsive="0" data-time="America%2FNew_York" data-root="0" 
            data-cheader="2853a8" data-theader="ffffff" data-border="2853a8" 
            data-background="ffffff" data-normal="000000" data-link="135d9e" 
            target="_blank" id="LTF_live_website_visitor">
                Visitor Counter
            </a>
            <script type="text/javascript" src="//cdn.livetrafficfeed.com/static/v4/live.js"></script>
            <noscript>
                <a href="http://livetrafficfeed.com">Visitor Counter</a>
            </noscript>
        @endsection