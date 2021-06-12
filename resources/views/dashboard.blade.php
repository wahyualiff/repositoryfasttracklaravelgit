@extends('tampilan-admin')
@section('isi_halaman')
<br>
<br>
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h1>Dashboard Admin</h1>
            <a href="{{route("motor.create")}}">Tambah Produk</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>Kaos Polo</td>
                        <td>£18.00</td>
                        <td>
                            <center><img src="{{asset('storage/pc1.jpg')}}" alt="" style="height: 100px; width: 100px;" >
                        </td>
                        <td>
                            <input type="button" value="Edit" class="btn btn-warning">
                            <input type="button" value="Delete" class="btn btn-danger">
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>
@endsection