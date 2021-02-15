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
                                    <h2>OLE</h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <h2> Your Sport Schedule </h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card-header">
                    <h3 class="text-center" style="font-family: DancingScript">Selamat datang di OLE</h3>
                </div>
                <form action="{{ route('login') }}" method="post">
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
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block login">Log In</button>
                    <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>
                </div>
                </form>
            </div>
        </div>

        <footer>
            <h3>Designed by OLE Team.</h3>
        </footer>
    </body>
</html>