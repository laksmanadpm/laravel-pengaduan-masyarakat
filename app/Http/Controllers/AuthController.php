<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    function login()
    {
        $judul = "selamat datang ";
        $pengaduan = DB::table('masyarakat')->get();

        return view('login', ['TextJudul' =>  $judul, 'masyarakat' => $pengaduan]);
    }

    function register()
    {
        $judul = "selamat datang ";
        $pengaduan = DB::table('masyarakat')->get();

        return view('register', ['TextJudul' =>  $judul, 'masyarakat' => $pengaduan]);
    }
}