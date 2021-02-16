@extends('master')
    @section('extra-head')
    <script type="text/javascript" src='/js/reminderModal.js'></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @endsection
        @section('konten')
        @include('days.reminder')
        <section id="ole" class="section-index pb-5">
            <div class="container">
                <div class="judul">
                    <div class="row mb-5 pt-5">
                        <div class="col text-center text-white">
                            <h1 style="font-family: Sport">Kalender Olahraga</h1>
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
        <center>
            <a href="https://livetrafficfeed.com/website-counter" data-time="Asia%2FJakarta" 
            data-root="0" id="LTF_counter_href">
                Website Counter
            </a>
            <script type="text/javascript" src="//cdn.livetrafficfeed.com/static/static-counter/live.v2.js"></script>
            <noscript>
                <a href="https://livetrafficfeed.com/website-counter">Website Counter</a>
            </noscript>
        </center>
        @endsection