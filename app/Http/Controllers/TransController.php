<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransController extends Controller
{
    public function pinjam(Request $req)
    {
      if($req){
        $buku=DB::table('tb_buku')->where('status',"Ada")->get();
        //$noinduk=DB::table('tb_koleksi_buku')->where('no_induk_buku', $req->noinduk)->get();
        $anggota=DB::table('tb_anggota')->where('no_anggota',$req->noang)->first();
      } else {
        $anggota="";
        $buku="";
        //$noinduk="";

      }
      return view('pages/peminjaman', compact('anggota','buku'));
    }

    public function save(Request $req)
    {
      //MEMBUAT KODE PEMINJAMAN OTOMATIS
      $jmlrec = DB::table('tb_peminjaman')->orderBy('kd_pinjam','desc')->first();
      if($jmlrec!=null){
        $nopinjam = "P".sprintf('%06d',$jmlrec->kd_pinjam);

      } else {
        $nopinjam = "P000001";
      }
      foreach($req->get('kodebuku') as $kode){

        //SIMPAN KE TABLE PEMINJAMAN
        DB::table('tb_peminjaman')->insert([
          'no_pinjam'=>$nopinjam,
          'tgl_pinjam'=>date('Y-m-d'),
          'tgl_kembali'=>date('Y-m-d', strtotime('+3 days')),
          'kd_buku'=>$kode,
          'no_anggota'=>$req->get('noang'),
          //'no_induk_buku'=>$req->get('no_induk_buku')
        ]);

        //UPDATE STATUS BUKU MENJADI TERPINJAM
        DB::table('tb_buku')->where("kd_buku", $kode)->update([
          'status'=>'Terpinjam'
        ]);
      }
      return redirect('trans/peminjaman')->with('nopinjam',$nopinjam)->with('sukses','Buku berhasil dipinjam!!');

    }

    public function struk($nopinjam)
    {
      $data = DB::select("SELECT a.no_pinjam, a.kd_buku, b.judul, a.no_anggota, c.nama, a.tgl_kembali, a.tgl_pinjam FROM tb_peminjaman a
      INNER JOIN tb_buku b ON a.kd_buku=b.kd_buku
      INNER JOIN tb_anggota c ON a.no_anggota=c.no_anggota WHERE a.no_pinjam='".$nopinjam."'");

      return view('pages/struk', compact('data'));
    }
    //================================= END ========================================//

    //================================= TRANSAKSI PENGEMBALIAN ===============================//
    public function kembali(Request $req)
    {
      if(count($req->all())>0){
        $pinjam = DB::select("SELECT a.no_pinjam, a.kd_buku, b.judul, a.no_anggota, c.nama, a.tgl_kembali FROM tb_peminjaman a
        INNER JOIN tb_buku b ON a.kd_buku = b.kd_buku
        INNER JOIN tb_anggota c ON a.no_anggota = c.no_anggota WHERE a.status=0 and a.no_pinjam='".$req->get('nopinjam')."'");

        //Jika data tidak ditemukan
        if(count($pinjam)==0){
          $pinjam="";
        }

      } else {
        $pinjam="";
      }
      return view('pages/pengembalian', compact('pinjam'));
    }

    public function save_kembali(Request $req)
    {
      foreach($req->get('kd_buku') as $kode){
        //Simpan ke tabel peminjaman
        DB::table('tb_peminjaman')->where('no_pinjam', $req->get('nopinjam'))->where('kd_buku', $kode)->update([
          'denda'=>$req->get('denda'),
          'status'=>1
        ]);

        //Update status buku menjadi Terpinjam
        DB::table('tb_buku')->where('kd_buku', $kode)->update([
          'status'=>'Ada'
        ]);
      }
      return redirect('trans/pengembalian')->with('sukses','Buku berhasil dikembalikan!!');
    }

}
