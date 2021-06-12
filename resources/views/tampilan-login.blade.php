<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAST TRACK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-image: url(storage/cham.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        main {
            width: 35%;
            padding: 20px;
            margin: 20px auto;
            background-color: ghostwhite;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="top">
        <div class="container">
            <a class="navbar-brand" href="/home"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/motogp">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/yamaha-team">Moto GP <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/identitasdiv">KTP <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/suratim">SIM <span class="sr-only"></span></a>
                    </li>
                </ul>
                
            </div>
            <a href="/login" class="btn btn-outline-success mr-3">Login</a>
            &nbsp;
            <a href="/registrasi" class="btn btn-outline-primary">Daftar</a>
        </div>
    </nav>
<br><br>
    <div class="container" style="min-height: 500px">
        @yield('isi_halaman')
    </div>
<br>
<footer class="footer bg-dark text-white" style="height: 130px; padding: 20px;">
    <div class="row">
        <div class="col"><center><br>Made by Muhamad Wahyu Alif &middot;
            <a href="#">Privacy</a> &middot;
            <a href="#">Terms</a>
        </div>
        <br>
        <div class="col" align="center">
            <h4>Kontak kami</h4>
            <center>
            <ul>
                Instagram : @wahyualif__
            </ul>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>