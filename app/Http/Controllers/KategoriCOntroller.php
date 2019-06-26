<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function add()
    {
        $kategori=(object)["kd_kategori"=>"","nama_kategori"=>"","singkatan"=>"",];
        return view('pages/kategori', compact('kategori'));
    }

    public function daftar()
    {
        $data=DB::table('tb_kategori')->get();
        return view('pages/data/listkategori', compact('data'));
    }

    public function save(Request $req)
    {
        $kd=$req->kd_kategori;
        $nama=$req->nama;
        $sing=$req->singkatan;

        if($req->get("kd_kategori")==""){
            //Simpan add
            DB::table('tb_kategori')->insert([
                "nama_kategori"=>$nama,
                "singkatan"=>$sing
            ]);

        } else {
            //simpan edit
            DB::table('tb_kategori')->where('kd_kategori', $kd)->update([
                "nama_kategori"=>$nama,
                "singkatan"=>$sing
            ]);
        }

        return redirect('kategori')->with('sukses','Data berhasil ditambah');;
    }

    public function edit($kode)
    {
        $kategori = DB::table('tb_kategori')->where('kd_kategori', $kode)->first();
        return view('pages/kategori', compact('kategori'));
    }

    public function delete($kode)
    {
        $hapus=DB::table('tb_kategori')->where('kd_kategori',$kode)->delete();
        return redirect('kategori')->with('sukses','Data berhasil dihapus');
    }
}
