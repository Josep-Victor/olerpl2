<html>
    <head>
        <meta charset="UTF-8">
        <title>OLE - Sport Schedule</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('img/logo-icon.png')}}">
        <script language="javascript" src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.js'></script>
        <script type="text/javascript" src="{{asset('js/js_days.js')}}"></script>
        <script type="text/javascript" src='/js/jquery.stopwatch.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @yield('extra-head')
    </head>
    <body>
        <section id="ole-header" class="ole-header pb-5">
            <div class="header">
                <div class="container">
                    <div class="header-left">
                        <h1>O L E</h1>
                    </div>
                    <div class="header-right">
                        <h1> Your Sport Schedule </h1>
                    </div>
                </div>
            </div>
        </section>

        @yield('konten')
        <footer>
            <img src="{{asset('img/logo-footer.png')}}" style="width: 100px;">
            <h3>Designed by OLE Team.</h3>
        </footer>
    </body>
</html>