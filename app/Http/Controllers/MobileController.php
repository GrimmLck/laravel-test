<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MobileController extends Controller
{
    public function listbuku()
    {
        //Untuk menampilkan data di dalam table yang sudah dibuat
        $data = DB::select("SELECT a.id, a.kd_buku, a.judul, b.nama_pengarang, c.nama_penerbit, d.nama_kategori, a.edisi, a.status, a.cover, a.halaman, a.tahun_terbit, a.tempat_terbit, a.ISBN FROM tb_buku a
		INNER JOIN tb_pengarang b ON a.kd_pengarang=b.kd_pengarang
		INNER JOIN tb_penerbit c ON a.kd_penerbit=c.kd_penerbit
        INNER JOIN tb_kategori d ON a.kd_kategori=d.kd_kategori");
        return json_encode($data);
    }

    public function pengarang()
    {
        $pengarang = DB::table('tb_pengarang')->get();
        return json_encode($pengarang);
    }

    public function penerbit()
    {
        $penerbit = DB::table('tb_penerbit')->get();
        return json_encode($penerbit);
    }

    public function kategori()
    {
        $kategori = DB::table('tb_kategori')->get();
        return json_encode($kategori);
    }

    public function save(Request $req)
    {
        if(!$req->has('id')){
            $result = DB::table('tb_buku')->insert([
                "kd_buku"=> $req->kode,
                "judul"=> $req->judul,
                "kd_pengarang"=> $req->kdpen,
                "kd_penerbit"=> $req->kdpeng,
                "tempat_terbit"=> $req->tmpt,
                "tahun_terbit"=> $req->thn,
                "kd_kategori"=> $req->kdkateg,
                "halaman"=> $req->hal,
                "edisi"=> $req->edisi,
                "ISBN"=> $req->isbn,
                "status" => "Ada"
            ]);
        }else{
            $result = DB::table('tb_buku')->where("id", $req->id)->update([
                "kd_buku"=> $req->kode,
                "judul"=> $req->judul,
                "kd_pengarang"=> $req->kdpeng,
                "kd_penerbit"=> $req->kdpen,
                "tempat_terbit"=> $req->tmpt,
                "tahun_terbit"=> $req->thn,
                "kd_kategori"=> $req->kdkateg,
                "halaman"=> $req->hal,
                "edisi"=> $req->edisi,
                "ISBN"=> $req->isbn,
                "status" => "Ada"
            ]);
        }

        //NILAI BALIK
        if($result){
            echo json_encode(["type"=>"success","msg"=>"Data Success Dsimpan !"]);
        } else {
            echo json_encode(["type"=>"error","msg"=>"Data Gagal Disimpan !"]);
        }
    }

    public function delete($kode)
    {
       $res = DB::table('tb_buku')->where("id",$kode)->delete();

        //NOTIF
        if($res){
            echo json_encode(["type"=>"success","msg"=>"Data Berhasil Dihapus !1! "]);
        }else{
            echo json_encode(["type"=>"error","msg"=>"Data Gagal Dihapus !1! "]);
        }
    }

    public function login(Request $req)
    {
      $profile = DB::table('users')->where('email', $req->email)->first();
      if($profile){
        if(Hash::check($req->pass, $profile->password)){
          $profile = DB::select('SELECT * FROM users WHERE email="'.$req->email.'"');
          echo json_encode(["type"=>"sukses", "profile"=>$profile[0]]);
        } else{
          echo json_encode(["type"=>"error", "msg"=>"Password Invalid !1!"]);
        }
      }else{
        echo json_encode(["type"=>"error", "msg"=>"Email Invalid !1!"]);
      }
    }
}
