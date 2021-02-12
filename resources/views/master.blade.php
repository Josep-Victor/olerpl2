<html>
    <head>
        <meta charset="UTF-8">
        <title>OLE - Sport Schedule</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('img/logo-icon.png')}}">
        <script language="javascript" src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.js'></script>
        <script type="text/javascript" src='/js/js_days.js'></script>
        <script type="text/javascript" src='/js/jquery.stopwatch.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @yield('extra-head')
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
                            <li class="list-inline-item">
                                <a href="#">
                                    <h2 id="myBtn">profile</h2>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <h2>history</h2>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('logout') }}">
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

        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 style="font-family: sport; font-weight: normal;">Profile</h1>
                    <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <p>Hai, {{ Auth::user()->name }} !</p>
                <p>Sebelumnya kami ucapkan terimakasih karena sudah menggunakan aplikasi OLE</p>
                <span></span>
                <p>Ini adalah data berat badan & tinggi badan kamu yang ada di sistem kami</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        Berat Badan : <b style="font-size: 32px">{{ Auth::user()->berat_badan }}</b>  kg
                    </li>
                    <li class="list-inline-item">
                        Tinggi Badan : <b style="font-size: 32px">{{ Auth::user()->tinggi_badan }}</b>  cm 
                    </li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        Kamu membuat akun pada tanggal <b style="font-size: 32px">{{ Auth::user()->created_at->toDateString() }}</b>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
            <h3>Modal Footer</h3>
            </div>
        </div>

        </div>

        @yield('konten')

        <footer>
            <h3>Designed by OLE Team.</h3>
        </footer>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
            modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
        </script>
    </body>
</html>