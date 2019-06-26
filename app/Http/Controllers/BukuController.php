<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function add()
    {
        //ketika tombol tambah data di klik
        $buku=(object)["id"=>"","kd_buku"=>"","judul"=>"","kd_pengarang"=>"","kd_penerbit"=>"","tempat_terbit"=>"","tahun_terbit"=>"","kd_kategori"=>"","halaman"=>"","edisi"=>"","ISBN"=>"","cover"=>""];
        $pengarang=DB::table('tb_pengarang')->get();
        $penerbit=DB::table('tb_penerbit')->get();
        $kategori=DB::table('tb_kategori')->get();
        return view('pages/buku',compact('pengarang','penerbit','kategori','buku'));
    }

    public function daftar()
    {
        //untuk menampilkan data di dalam table yang sudah dibuat
        $data = DB::select('SELECT a.id, a.kd_buku, a.judul, b.nama_pengarang, c.nama_penerbit, d.nama_kategori, a.edisi FROM tb_buku a
        INNER JOIN tb_pengarang b ON a.kd_pengarang=b.kd_pengarang
        INNER JOIN tb_penerbit c ON a.kd_penerbit=c.kd_penerbit
        INNER JOIN tb_kategori d ON a.kd_kategori=d.kd_kategori');
        return view ('pages.data.listbuku',compact('data'));

    }

    public function simpan(Request $req)
    {
        //Cek nama File foto
        if($req->file('sampul')){
            $foto=$req->file('sampul');
            $nama_foto=date('m-y-').$foto->getClientOriginalName();
        }else{
            $nama_foto=$req->get('old-foto');
        }

        //Simpan buku
        $kd=$req->kode;
        $judul=$req->judul;
        $pengarang=$req->pengarang;
        $penerbit=$req->penerbit;
        $tmpt=$req->tempat;
        $thn=$req->tahun;
        $kategori=$req->kategori;
        $hal=$req->halaman;
        $edisi=$req->edisi;
        $isbn=$req->isbn;


        if($req->get('id')=="")
        {
            //simpan add
            DB::table('tb_buku')->insert([
                "kd_buku"=>$kd,
                "judul"=>$judul,
                "kd_pengarang"=>$pengarang,
                "kd_penerbit"=>$penerbit,
                "tempat_terbit"=>$tmpt,
                "tahun_terbit"=>$thn,
                "kd_kategori"=>$kategori,
                "halaman"=>$hal,
                "edisi"=>$edisi,
                "ISBN"=>$isbn,
                "cover"=>$nama_foto,
                "status"=>"Ada"
            ]);

        }else{
            //Simpan Edit
            DB::table('tb_buku')->where("id",$req->get('id'))->update([
                "kd_buku"=>$kd,
                "judul"=>$judul,
                "kd_pengarang"=>$pengarang,
                "kd_penerbit"=>$penerbit,
                "tempat_terbit"=>$tmpt,
                "tahun_terbit"=>$thn,
                "kd_kategori"=>$kategori,
                "halaman"=>$hal,
                "edisi"=>$edisi,
                "ISBN"=>$isbn,
                "cover"=>$nama_foto,
                "status"=>"Ada"
            ]);
        }

        //Memindahkan file gambar
        if($req->file('sampul')){
            $foto->move(public_path()."/images/cover",$nama_foto);
        }
        return redirect('buku/list')->with('sukses','Data buku berhasil diinput!!');
    }

    public function edit($kode)
    {
        //
        $pengarang=DB::table('tb_pengarang')->get();
        $penerbit=DB::table('tb_penerbit')->get();
        $kategori=DB::table('tb_kategori')->get();
        $buku=DB::table('tb_buku')->where("id",$kode)->first();
        return view('pages/buku', compact('pengarang','penerbit','kategori','buku'));
    }

    public function delete($kode)
    {
      $hapus=DB::table('tb_buku')->where('id',$kode)->delete();
      return redirect('buku/list')->with('sukses','Buku berhasil dihapus!!');
    }
}
