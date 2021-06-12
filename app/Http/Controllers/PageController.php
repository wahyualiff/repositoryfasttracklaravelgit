<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // tampil yamaha
    public function yamaha()
    {
        return view('yamaha-team');
    }

    // tampil honda
    public function honda()
    {
        return view('honda-team');
    }

    // tampil suzuki
    public function suzuki()
    {
        return view('suzuki-team');
    }

    // tampil ducati
    public function ducati()
    {
        return view('ducati-team');
    }

    // tampil ktm
    public function ktm()
    {
        return view('ktm-team');
    }

    // tampil home
    public function home()
    {
        return view('beranda');
    }

    // tampil ktp tabel
    public function ktp()
    {
        return view('identitas');
    }
    // tampil ktp
    public function ktpdiv()
    {
        return view('identitasdiv');
    }
    // tampil SIM
    public function sim()
    {
        return view('suratim');
    }
    // tampil Kuis
    public function sesi3()
    {
        return view('kuis');
    }
    // tampil login
    public function menu_login()
    {
        return view('login');
    }
    // tampil registrasi
    public function menu_regis()
    {
        return view('registrasi');
    }
}
