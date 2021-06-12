<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTOGP</title>
    <link rel="stylesheet" href="">
    <style type="text/css" media="screen">
        body {
            background-color: burlywood;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        main {
            width: 80%;
            padding: 20px;
            margin: 20px auto;
            background-color: ghostwhite;
            border-radius: 10px;
        }

        header {
            text-align: center;
            font-size: 38px;
            font-weight: bold;
            color: red;
            text-shadow: 2px 2px gold;
        }

        nav {
            margin: 10px 0;
            background-color: black;
            height: 60px;
        }

        nav a {
            text-decoration: none;
            color: white;
            float: left;
            padding: 20px;
            height: 20px;
            font-weight: bold;
        }

        nav a:hover {
            background-color: red;
            color: yellow;
        }

        article {
            padding: 10px;
            border: solid thin grey;
            border-radius: 5px;
            text-align: justify;
        }

        h1 {
            color: red;
            border-bottom: solid thin black;
        }

        img {
            width: 50%;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        p {
            font-size: 1em;
            text-align: justify;
        }

        footer {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <main>
        <header>motogp™</header>
        <nav>
            <a href="{{ url('/motogp')}}">Home</a>
            <a href="{{ url('/yamaha-team')}}">Yamaha</a>
            <a href="{{ url('/honda-team')}}">Honda</a>
            <a href="{{ url('/suzuki-team')}}">Suzuki</a>
            <a href="{{ url('/ducati-team')}}">Ducati</a>
            <a href="/ktm-team">KTM</a>
        </nav>
        <article>
            <h1>SUZUKI</h1>

            <img src="{{asset('storage/suzuki1.jpg')}}" alt="">

            <p>Suziki GSX-RR yang di geber Joan Mir 36 Sukses menjadi Juara Dunia MotoGP 2020 lalu, lantas bagaimana spesifikasi teknis dari Suzuki GSX-RR musim 2021 ini? Kurang lebih mirip karena ada pembekuan mesin yang berlaku untuk semua pabrikan MotoGP seperti regulasi terbaru.</p>

            <img src="{{asset('storage/suzuki2.jpg')}}" alt="">

            <p>Dan seperti biasa, spesifikasi power yang tertulis di atas adalah spesifikasi abu-abu alias rahasia perusahaan balap, ya lebih dari 240HP ….. Dengan Topspeed lebih dari 340 km per jam !

                Gosipnya, Motor balap pabrikan MotoGP bisa tembus 300 HP dengan berat kosong cuma 157KG sesuai dengan regulasi MotoGP, biyuh jambakan opo iki. Selain power besar, mesin balap MotoGP juga harus awet alias punya daya tahan tinggi mengingat jatah mesin yang sedikit per musim.</p>

            <input type="button" value="<<Back" onclick="history.back(-1)" />
        </article>
        <footer>
            fast track laravel
        </footer>
    </main>
</body>

</html>