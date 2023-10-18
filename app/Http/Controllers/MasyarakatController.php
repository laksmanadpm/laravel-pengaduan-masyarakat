<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    function index(){
        $judul ="ini daftar masyarakat kwangya ";

        $masyarakat = DB::table('masyarakat')->get();
        return view('masyarakat',['TextJudul' =>  $judul, 'masyarakat' => $masyarakat]);
    }

    function tampil_masyarakat(){
        $judul = "tambah masyarakat cuy";

        return view('isi-masyarakat',['TextJudul' =>  $judul,]);
    }
    function proses_tambah_masyarakat(Request $request){
        $request->validate([
            'nik' => 'required|min:5'
        ]);
        $nik = $request -> nik;
        $nama = $request -> nama;
        $username = $request -> username;
        $password = $request -> password;
        $telp = $request -> telp;

        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'telp' => $telp

        ]);

        return redirect('/masyarakat');
    }
}