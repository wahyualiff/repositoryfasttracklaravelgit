<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTOGP</title>
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
        <nav>
            <a href="{{ url('/motogp')}}">Home</a>
            <a href="{{ url('/yamaha-team')}}">Yamaha</a>
            <a href="{{ url('/honda-team')}}">Honda</a>
            <a href="{{ url('/suzuki-team')}}">Suzuki</a>
            <a href="{{ url('/ducati-team')}}">Ducati</a>
            <a href="/ktm-team">KTM</a>
        </nav>
        <article>
            <h1>YAMAHA</h1>

            <img src="{{asset('storage/yamaha3.jpg')}}" alt="">

            <p>Tim balap Monster Energy Yamaha MotoGP resmi memperkenalkan motor YZR-M1 edisi 2021 pada Senin (15/2). Sesi peluncuran itu dihadiri duo pebalap andalannya Maverick Vinales dan Fabio Quartararo. Menjadi menarik, karena Quartararo adalah rider baru di tim Movistar menggantikan Valentino Rossi yang pindah haluan ke Yamaha Petronas SRT.
            </p>

            <img src="{{asset('storage/yamaha2.jpg')}}" alt="">

            <p> Sepintas memang tak terlihat perbedaan dengan tampilan M1 di gelaran balap 2020. Warna kebesaran biru dipadukan hitam dan dilengkapi dengan decal M besar yang menjadi logo Monster Energy masih ada.
                Pun dengan nomor balap yang diusung Vinales yakni 12 dan Quartararo yang konsisten menggunakan nomor balap 20. Keduanya mengusung mesin dan spesifikasi yang sama.</p>

            <input type="button" value="<<Back" onclick="history.back(-1)" />
        </article>
        <footer>
            © fast track laravel
        </footer>
    </main>
</body>

</html>