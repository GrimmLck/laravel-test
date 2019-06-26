<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;

class ReportController extends Controller
{
    public function buku()
    {
      $buku = DB::select("SELECT a.kd_buku, a.judul, b.nama_pengarang, c.nama_penerbit, d.nama_kategori, a.edisi FROM tb_buku a
      INNER JOIN tb_pengarang b ON a.kd_pengarang=b.kd_pengarang
      INNER JOIN tb_penerbit c ON a.kd_penerbit=c.kd_penerbit
      INNER JOIN tb_kategori d ON a.kd_kategori=d.kd_kategori");
      $content = view('pages/report/buku', compact('buku'));

      $pdf = new MPdf([
        'orientation'=>"P",
        'format'=>"Folio"
      ]);
      $pdf->WriteHTML($content);
      $pdf->Output (public_path().'/Laporan Data Buku','I');
      exit();
    }

    public function anggota()
    {
      $anggota = DB::table('tb_anggota')->get();
      $content = view('pages/report/anggota', compact('anggota'));
      $pdf = new MPdf([
        'orientation'=>"P",
        'format'=>"Folio"
      ]);
      $pdf->WriteHTML($content);
      $pdf->Output (public_path(). '/Laporan Data Anggota','I');
    }

    public function pinjam()
    {
      $pinjam = DB::table('tb_peminjaman')->get();
      $content = view('pages/report/peminjaman', compact('pinjam'));
      $pdf = new MPdf([
        'orientation'=>"P",
        'format'=>"Folio"
      ]);
      $pdf->WriteHTML($content);
      $pdf->Output (public_path(). '/Laporan Data Peminjaman','I');
      exit();
    }

    public function kembali()
    {
      $kembali = DB::table('tb_peminjaman')->where('status',1)->get();
      $content = view('pages/report/pengembalian', compact('kembali'));
      $pdf = new MPdf([
        'orientation'=>"P",
        'format'=>"Folio"
      ]);
      $pdf->WriteHTML($content);
      $pdf->Output (public_path(). '/Laporan Data Pengembalian','I');
    }
}
