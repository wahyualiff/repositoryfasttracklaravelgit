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
            <h1>HONDA</h1>

            <img src="{{asset('storage/honda1.jpg')}}" alt="">

            <p>Juara delapan kali, Marc Marquez kembali tampil ke publik setelah absen hampir 1 musim akibat cedera. Bersama dengan rekan tim barunya Pol Espargaro keduanya meluncurkan Honda RC123V 2021.</p>

            <img src="{{asset('storage/honda2.jpg')}}" alt="">

            <p>Secara visual, tahun ini nampaknya tak ada ubahan signifikan pada sektor tampilan. Honda Repsol masih menyematkan livery oranye kombinasi putih.
                Sama halnya dengan nomor balap keberuntungan. Marquez masih menggunakan nomor 93, sementara Pol Espargaro masih setia dengan nomor 44 yang juga dikenakannya saat membela tim KTM.</p>

            <input type="button" value="<<Back" onclick="history.back(-1)" />
        </article>
        <footer>
            fast track laravel
        </footer>
    </main>
</body>

</html>