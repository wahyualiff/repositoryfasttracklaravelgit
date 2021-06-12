@extends('tampilan')
@section('isi_halaman')
<br>
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: gray;
    }
    main {
        width: 45%;
        padding: 10px;
        margin: 10px auto;
        background-color: rgb(205, 215, 219);
        border-radius: 10px;
    }
    table{
        font-size: 80%;
    }
    td.f{
        font-size: 300%;
    }
</style>
<main>
    <table border="2" align="center" cellpading="0" width="100%" bgcolor="white">
        <tbody>
            <tr>
                <td rowspan="4"><center><img src="{{asset('storage/polres.png')}}" alt="" width="70px" height="70px"></td>
                <td bgcolor="red"><center><b><font color="goldenrod">KEPOLISIAN NEGARA</td>
                <td class="f" rowspan="4"><center><img src="{{asset('storage/c.png')}}" alt="" width="70px" height="70px"></td>
            <tr>
                <td bgcolor="red"><center><b><font color="goldenrod">REPUBLIK INDONESIA</td>
            </tr>
            <tr>
                <td><center>SURAT IZIN MENGEMUDI</td>
            <tr>
                <td><center>( Driving License )</td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tr>
            <td align="center"><b>Nama: </td>
            <td><b>MUHAMAD WAHYU ALIF</td>
            <td><b>PRIA</td>
        </tr>
    </table>
        <table cellpading="0">
        <tr>
            <td align="right"><b>Alamat: </td>
            <td><b>&emsp;STAMFORD BRIDGE RT 012/021 </td>
        </tr>
        <tr>
            <td rowspan="14"><center><img src="{{asset('storage/b.jpg')}}" alt="" width="180px" height="300px"></td>
        </tr>
        <tr>
            <td><b>&emsp;CICADAS,GRIMSBY</td>
        </tr>
        <tr>
            <td><b>&emsp;LONDON</td>
        </tr>
        <tr>
            <td>&emsp;Tempat &</td>
            <td>: OLIMPUS</td>
        </tr>
        <tr>
            <td>&emsp;Tgl Lahir</td>
            <td>: 30-5-2021</td>
        </tr>
        <tr>
            <td>&emsp;Tinggi</td>
            <td>: 181 cm</td>
        </tr>
        <tr>
            <td>&emsp;Pekerjaan</td>
            <td>: PELAJAR/MHS</td>
        </tr>
        <tr>
            <td>&emsp;No.SIM</td>
            <td>: 98118846846540</td>
        </tr>
        <tr>
            <td>&emsp;Berlaku s/d</td>
            <td>: 4-11-2023</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;BOGOR, 04-08-2018</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;KASATLANTAS</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;<img src="{{asset('storage/ttd.png')}}" alt="" width="150px" height="50px"></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;<u>DONALD TRUMP, SH, SIK, MH</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;AKAP NRP .86778356</td>
        </tr>
    </table>
</main>

@endsection