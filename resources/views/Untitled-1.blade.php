<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        div.row{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 80%;
        }
        main {
            width: 65%;
            padding: 20px;
            margin: 20px auto;
            background-color: rgb(121, 253, 255);
            border-radius: 10px;
        }
        img{
            width: 170px;
            height: 250px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="/beranda">Home</a>
            </li>
            <li>
                <a class="nav-link" href="/motogp">Moto GP</a>
            </li>
            <li>
                <a class="nav-link" href="/identitas">Data KTP</a>
            </li>
        </ul>
    </nav>
    <br>
    <br>
    <main>
        <div class="row">
            <div class="col-md-12"><center><b>PROVINSI JAWA BARAT</b></center></div>
        </div>
        <div class="row">
            <div class="col"><center><b>KABUPATEN BOGOR</b></center></div>
        </div>
        <div class="row">
            <div class="col-md-1"><b>NIK</b></div>
            <div class="col-md-10"><b>: 3101020411980008</b></div>
        </div>
        <img src="{{asset('storage/css.png')}}" align="right" alt="">
        <p>
        <div class="row">
            <div class="col-md-2">Nama</div>
            <div class="col-md-4">: MUHAMAD WAHYU ALIF</div>
        </div>
        
        <div class="row">
            <div class="col-md-3">Tempat/Tgl Lahir</div>
            <div class="col-md-5">: SUKABUMI, 04-11-1998</div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3">Jenis Kelamin</div>
            <div class="col-md-3">: LAKI-LAKI</div>
            <div class="col-md-4">Gol. Darah:-</div>
        </div>
        <div class="row">
            <div class="col-md-3">Alamat</div>
            <div class="col-md-4">: KP.PARUNG TANJUNG</div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">RT/RW</div>
            <div class="col-md-4">: 001/011</div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">Kel/Desa</div>
            <div class="col-md-4">: CICADAS</div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">Kecamatan</div>
            <div class="col-md-4">: GUNUNG PUTRI</div>
        </div>
        <div class="row">
            <div class="col-md-3">Agama</div>
            <div class="col-md-4">: ISLAM</div>
        </div>
        <div class="row">
            <div class="col-md-3">Status Perkawinan</div>
            <div class="col-md-4">: BELUM KAWIN</div>
        </div>
        <div class="row">
            <div class="col-md-3">Pekerjaan</div>
            <div class="col-md-4">: PELAJAR/MAHASISWA</div>
        </div>
        <div class="row">
            <div class="col-md-3">Alamat</div>
            <div class="col-md-4">: KP.PARUNG TANJUNG</div>
        </div>
        <div class="row">
            <div class="col-md-3">Kewarganegaraan</div>
            <div class="col-md-4">: WNI</div>
        </div>
        <div class="row">
            <div class="col-md-3">Berlaku Hingga</div>
            <div class="col-md-4">: SEUMUR HIDUP</div>
        </div>
    </main>

    @yield('isi_halaman')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>