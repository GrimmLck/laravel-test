<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function add()
    {
      $user = (object)["id"=>"","name"=>"","jk"=>"","alamat"=>"","kota"=>"","telp"=>"","email"=>"","password"=>"","lv"=>"","avatar"=>""];
      return view('pages/user', compact('user'));
    }

    public function daftar()
    {
      $data = DB::table('users')->get();
      return view('pages/data/listuser', compact('data'));
    }

    public function save(Request $req)
    {
      //Cek nama File foto
      if($req->file('avatar')){
        $foto=$req->file('avatar');
        $nama_foto=date('d-m-Y-').$foto->getClientOriginalName();
      }else{
          $nama_foto=$req->get('old-foto');
      }

      if($req->get('id')==""){
        //SIMPAN ADD
        DB::table('users')->insert([
          "name" => $req->name,
          "jk" => $req->jk,
          "alamat" => $req->alamat,
          "kota" => $req->kota,
          "telp" => $req->telp,
          "email" => $req->email,
          "password" => Hash::make($req->pass),
          "remember_token" => $req->token,
          "created_at" =>  date('Y-m-d H:i:s'),
          "updated_at" =>  date('Y-m-d H:i:s'),
          "lv" => $req->level,
          "avatar" => $nama_foto
        ]);

      } else {
        //SIMPAN EDIT
        DB::table('users')->where('id',$req -> id)->update([
          "name" => $req->name,
          "jk" => $req->jk,
          "alamat" => $req->alamat,
          "kota" => $req->kota,
          "telp" => $req->telp,
          "email" => $req->email,
          "password" => Hash::make($req->pass),
          "remember_token" => $req->token,
          "created_at" =>  date('Y-m-d H:i:s'),
          "updated_at" =>  date('Y-m-d H:i:s'),
          "lv" => $req->level,
          "avatar" => $nama_foto
        ]);
      }

      //Memindahkan file gambar
      if($req->file('avatar')){
        $foto->move(public_path()."/images/user",$nama_foto);
      }
      return redirect('user/add')->with('sukses','User berhasil diinput!!');
    }

    public function edit($kode)
    {
      $user = DB::table('users')->where('id', $kode)->first();
      return view('pages/user', compact('user'));
    }

    public function delete($kode)
    {
      DB::table('users')->where('id', $kode)->delete();
      return redirect('user');
    }
}
