<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenerbitController extends Controller
{
    public function add()
    {
        $penerbit=(object)["kd_penerbit"=>"","nama_penerbit"=>"","kota"=>""];
        return view('pages/penerbit', compact('penerbit'));
    }

    public function daftar()
    {
        $data = DB::table('tb_penerbit')->get();
        return view('pages/data/listpenerbit', compact('data'));
    }

    public function save(Request $req)
    {
        $kd=$req->kd_penerbit;
        $nama=$req->nama;
        $kota=$req->kota;

        if($req->get("kd_penerbit")==""){

            //Simpan add
            DB::table('tb_penerbit')->insert([
                "nama_penerbit"=>$nama,
                "kota"=>$kota
            ]);
        return redirect('penerbit')->with('sukses','Data berhasil di tambah!!');
            
        } else {

            //Simpan edit
            DB::table('tb_penerbit')->where('kd_penerbit', $kd)->update([
                "nama_penerbit"=>$nama,
                "kota"=>$kota
            ]);
        return redirect('penerbit')->with('sukses','Data berhasil di update!!');
        }
    }

    public function edit($kode)
    {
        $penerbit = DB::table('tb_penerbit')->where('kd_penerbit', $kode)->first();
        return view('pages.penerbit', compact('penerbit'));
    }

    public function delete($kode)
    {
        $hapus=DB::table('tb_penerbit')->where('kd_penerbit', $kode)->delete();
        return redirect('penerbit')->with('sukses','Data berhasil dihapus!!');
    }
}
