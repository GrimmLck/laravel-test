<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function add()
    {
      $anggota=(object)["kd_anggota"=>"","no_anggota"=>"","nama"=>"","tempat"=>"","tgl_lahir"=>"","jk"=>"","alamat"=>"","kota"=>"","telp"=>"","email"=>"","foto"=>"",];
      return view('pages/anggota', compact('anggota'));
    }

    public function daftar()
    {
      //untuk menampilkan data di dalam table yang sudah dibuat
      $data = DB::table('tb_anggota')->get();
      return view ('pages.data.listanggota',compact('data'));
    }

    public function simpan(Request $req)
    {
        //Cek nama File foto
        if($req->file('avatar')){
          $foto=$req->file('avatar');
          $nama_foto=date('d-m-Y-').$foto->getClientOriginalName();
        }else{
            $nama_foto=$req->get('old-foto');
        }

        //NO ANGGOTA OTOMATIS
        $jmlrec = DB::table('tb_anggota')->orderBy('kd_anggota','desc')->first();
        if($jmlrec!=null){
          $noanggota = "A-".date('dmY').sprintf('%03d',$jmlrec->kd_anggota);

        } else {
          $noanggota = "A-0000023";
        }
      //$noangg=$req->no;
      $nama=$req->nama;
      $tempat=$req->tmpt;
      $tgl=$req->tgl;
      $jk=$req->jk;
      $alamat=$req->alamat;
      $kota=$req->kota;
      $telp=$req->telp;
      $email=$req->email;

      if($req->get("kd_anggota")=="")
      {
        //Simpan add
        DB::table('tb_anggota')->insert([
          "no_anggota"=>$noanggota,
          "nama"=>$nama,
          "tempat"=>$tempat,
          "tgl_lahir"=>$tgl,
          "jk"=>$jk,
          "alamat"=>$alamat,
          "kota"=>$kota,
          "telp"=>$telp,
          "email"=>$email,
          "foto"=>$nama_foto

        ]);

      }else{
        //Simpan edit
        DB::table('tb_anggota')->where('kd_anggota',$req->get('kd_anggota'))->update([
          "nama"=>$nama,
          "tempat"=>$tempat,
          "tgl_lahir"=>$tgl,
          "jk"=>$jk,
          "alamat"=>$alamat,
          "kota"=>$kota,
          "telp"=>$telp,
          "email"=>$email,
          "foto"=>$nama_foto
        ]);
      }
      //Memindahkan file gambar
      if($req->file('avatar')){
        $foto->move(public_path()."/images/avatar",$nama_foto);
      }
      return redirect('anggota')->with('sukses','Data anggota berhasil di submit!1!');
    }

    public function edit($kode)
    {
      $anggota=DB::table('tb_anggota')->where('kd_anggota',$kode)->first();
      return view('pages/anggota', compact('anggota'));
    }

    public function delete($kode)
    {
      $hapus=DB::table('tb_anggota')->where('no_anggota',$kode)->delete();
      return redirect ('anggota')->with('sukses','Data anggota berhasil dihapus!1!');
    }

}
