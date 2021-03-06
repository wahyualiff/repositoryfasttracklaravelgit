<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Dashboard
        $dataProduk = Product::all();
        return view('dashboard', ["products" => $dataProduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tambah Produk
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            "kode_produk" => $request->KodeProduk,
            "nama" => $request->nama,
            "deskripsi" => $request->desc,
        ]);

        return redirect()->route('motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit produk
        $dataProduct = Product::find($id);

        return view('ubah', ["dataUbah" => $dataProduct]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Edit Produk
        $dataProduct = Product::find($id);

        $dataProduct->kode_produk = $request->KodeProduk;
        $dataProduct->nama = $request->nama;
        $dataProduct->deskripsi = $request->desc;
        $dataProduct->save();

        return redirect()->route('motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Hapus
        $dataProduct = Product::find($id);
        $dataProduct->delete();

        return redirect()->route('motor.index');
    }
}
