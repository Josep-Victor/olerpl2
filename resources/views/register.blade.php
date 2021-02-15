<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OLE - Sport Schedule</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('img/logo-icon.png')}}">
        <script language="javascript" src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.js'></script>
        <script type="text/javascript" src='/js/js_days.js'></script>
        <script type="text/javascript" src='/js/jquery.stopwatch.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href='css/app.css'>
        <link rel="stylesheet" href='css/responsiveAuth.css'>
    </head>
    <body>
        <section id="ole-header" class="ole-header pb-5">
            <div class="header">
                <div class="container">
                    <div class="header-left">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ route('welcome') }}">
                                    <h1>OLE</h1>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <h1> Your Sport Schedule </h1>
                    </div>
                </div>
            </div>
        </section>
            <div class="container">
                <div class="col-md-4 offset-md-4 mt-5">
                        <div class="card-header">
                            <h3 class="text-center">Form Register</h3>
                        </div>
                        <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="card-body">
                            @if(session('errors'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Something it's wrong:
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for=""><strong>Nama Lengkap</strong></label>
                                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Berat Badan</strong></label>
                                <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Tinggi Badan</strong></label>
                                <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Email</strong></label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Password</strong></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Konfirmasi Password</strong></label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                        </div>
                        </form>
                    </div>
            </div>
        <footer>
            <h3>Designed by OLE Team.</h3>
        </footer>
    </body>
</html>