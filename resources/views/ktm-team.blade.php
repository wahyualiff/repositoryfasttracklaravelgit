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
            <h1>RED BULL KTM</h1>

            <img src="{{asset('storage/ktm2.jpg')}}" alt="">

            <p>Tim Red Bull KTM memecahkan rekor menjadi juara MotoGP setelah gabung di ajang MotoGP sejak 2017 lalu. Brad Binder membawa nama KTM ke podium tertinggi di MotoGP Ceko 2020 yang digelar di sirkuit Brno.
                Binder menunggangi motor KTM RC16. Setelah gabung dengan MotoGP beberapa tahun lalu, KTM RC16 mendapatkan beberapa kali perbaikan. Desain fairing hingga mekanikalnya ditingkatkan agar bisa menjadi yang tercepat di kelas MotoGP. Hasilnya, balapan semalam KTM berhasil mengasapi motor-motor lain di MotoGP Ceko.</p>

            <p>Dani Pedrosa dan Mika Kallio digandeng KTM sebagai pebalap penguji (test rider). Sentuhan Pedrosa dan Kallio di motor KTM sedikit banyak membawa pengaruh.

                Bicara spesifikasi, KTM RC16 tunggangan Binder yang menjuarai balapan MotoGP Ceko semalam WIB menggendong mesin 1.000cc empat silinder dengan konfigurasi mesin berbentuk V. Tenaga dari mesin itu mampu mencapai lebih dari 265 daya kuda. Kecepatan maksimalnya bisa lebih dari 340 km/jam.</p>

            <input type="button" value="<<Back" onclick="history.back(-1)" />
        </article>
        <footer>
            fast track laravel
        </footer>
    </main>
</body>

</html>