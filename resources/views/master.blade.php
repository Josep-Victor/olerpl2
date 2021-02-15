<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OLE - Sport Schedule</title>
        <link rel="stylesheet" href='css/responsiveMaster.css'>
        <link rel="shortcut icon" type="image/png" href="{{asset('img/logo-icon.png')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script language="javascript" src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.js'></script>
        <script type="text/javascript" src='/js/js_days.js'></script>
        <script type="text/javascript" src='/js/jquery.stopwatch.js'></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @yield('extra-head')
    </head>
    <body>
        <section id="ole-header" class="ole-header pb-5">
            <div class="header">
                <div class="container">
                    <div class="header-left col-320 col-375 col-425">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ route('welcome') }}">
                                    <h2>OLE</h2>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-toggle="modal" data-target="#profile">
                                    <h2>profile</h2>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-toggle="modal" data-target="#history">
                                    <h2>history</h2>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-toggle="modal" data-target="#logout">
                                    <h2>logout</h2>
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

        @include('profile')
        @include('history')
        @include('logout')

        @yield('konten')

        <footer>
            <h3>Designed by OLE Team.</h3>
        </footer>
    </body>
</html>