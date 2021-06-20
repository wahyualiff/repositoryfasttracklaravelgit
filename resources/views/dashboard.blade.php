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
                        <th>Kode Produk</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->kode_produk}}</td>
                        <td>{{$product->nama}}</td>
                        <td>{{$product->deskripsi}}</td>
                        <td>
                            <a href="{{route('motor.edit', $product->id)}}" class="btn btn-warning">Edit</a>
                            <input type="button" value="Delete" class="btn btn-danger">
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>
    </div>
</div>
@endsection