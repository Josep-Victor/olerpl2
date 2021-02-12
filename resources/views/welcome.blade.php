@extends('master')
    @section('extra-head')
        <script type="text/javascript" src='/js/js_categories.js'></script>
        <link rel="stylesheet" href='css/app.css'>
    @endsection
    @section('konten')
        <section id="ole" class="welcome pb-5">
            <div class="container">
                <div class="board-welcome">
                </div>
                <span></span>
                    <div class="judul">
                        <div class="row mb-5 pt-5">
                            <div class="col text-center text-white">
                                <h3>Selamat datang, <strong>{{ Auth::user()->name }}</strong>
                                <h1> yuk mulai olahraga!</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                            <div class="col text-center text-white">
                                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                                <a href="<?php if(Auth::user()->kategori == 1){
                                        return redirect()->route('kategori1');
                                    }
                                    else if (Auth::user()->kategori == 2){
                                        return redirect()->route('kategori2');
                                    }
                                    else if (Auth::user()->kategori == 3){
                                        return redirect()->route('kategori3');
                                    }
                                    ?>" class="btn btn-danger">Mulai</a>
                            </div>
                    </div>
                </div>
        </section>
    @endsection