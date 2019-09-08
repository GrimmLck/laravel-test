<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengarangController extends Controller
{
    public function add()
    {
      $pengarang = (object)["kd_pengarang"=>"","nama_pengarang"=>"","kota"=>""];
      return view('pages/pengarang', compact('pengarang'));
    }

    public function daftar()
    {
      $data = DB::table('tb_pengarang')->get();
      return view('pages/data/listpengarang', compact('data'));
    }

    public function save(Request $req)
    {
      $kd=$req->kd_pengarang;
      $nama=$req->nama;
      $kota=$req->kota;

      if($req->get("kd_pengarang")==""){
        //Simpan add
        DB::table('tb_pengarang')->insert([
          "nama_pengarang"=>$nama,
          "kota"=>$kota
        ]);

      } else {
        DB::table('tb_pengarang')->where("kd_pengarang", $kd)->update([
          "nama_pengarang"=>$nama,
          "kota"=>$kota
        ]);
      }
      return redirect('pengarang')->with('sukses','Data berhasil di input!!');
    }

    public function edit($kode)
    {
      $pengarang = DB::table('tb_pengarang')->where("kd_pengarang", $kode)->first();
      return view('pages/pengarang', compact('pengarang'));
    }

    public function delete($kode)
    {
      DB::table('tb_pengarang')->where("kd_pengarang", $kode)->delete();
      return redirect('pengarang')->with('sukses','Data berhasil dihapus!!');
    }
}
