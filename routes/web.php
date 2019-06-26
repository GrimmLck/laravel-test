<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(!Auth::user()){
        return view('auth.login');
    } else {
        return redirect('dashboard');
    }
});

Route::group(['middleware'=>['isAdmin']], function() {
    Route::get('dashboard', function() {
        return view('template/template');
    });


//Buku
Route::get('buku/add', 'BukuController@add');
Route::get('buku/list', 'BukuController@daftar');
Route::post('buku/save', 'BukuController@simpan');
Route::get('buku/edit/{kode}', 'BukuController@edit');
Route::get('buku/delete/{kode}', 'BukuController@delete');
//Anggota
Route::get('anggota/add', 'AnggotaController@add');
Route::get('anggota', 'AnggotaController@daftar');
Route::post('anggota/save', 'AnggotaController@simpan');
Route::get('anggota/{kode}/edit', 'AnggotaController@edit');
Route::get('anggota/{kode}/delete', 'AnggotaController@delete');

//KATEGORI
Route::get('kategori/add', 'KategoriController@add');
Route::get('kategori', 'KategoriController@daftar');
Route::post('kategori/save', 'KategoriController@save');
Route::get('kategori/{kode}/edit', 'KategoriController@edit');
Route::get('kategori/{kode}/delete', 'KategoriController@delete');

//PENERBIT
Route::get('penerbit/add', 'PenerbitController@add');
Route::get('penerbit', 'PenerbitController@daftar');
Route::post('penerbit/save', 'PenerbitController@save');
Route::get('penerbit/edit/{kode}', 'PenerbitController@edit');
Route::get('penerbit/delete/{kode}', 'PenerbitController@delete');

//PENGARANG
Route::get('pengarang/add', 'PengarangController@add');
Route::get('pengarang', 'PengarangController@daftar');
Route::post('pengarang/save', 'PengarangController@save');
Route::get('pengarang/edit/{kode}', 'PengarangController@edit');
Route::get('pengarang/delete/{kode}', 'PengarangController@delete');

//TRANSAKSI PEMINJAMAN
Route::post('trans/peminjaman', 'TransController@pinjam');
Route::get('trans/peminjaman', 'TransController@pinjam');
Route::post('trans/peminjaman/save', 'TransController@save');
Route::get('trans/struk-peminjaman/{nopinjam}', 'TransController@struk');


//TRANSAKSI PENGEMBALIAN
Route::post('trans/pengembalian', 'TransController@kembali');
Route::get('trans/pengembalian', 'TransController@kembali');
Route::post('trans/pengembalian/save', 'TransController@save_kembali');


//user
Route::get('user/add', 'UserController@add');
Route::get('user', 'UserController@daftar');
Route::post('user/save', 'UserController@save');
Route::get('user/edit/{kode}', 'UserController@edit');
Route::get('user/delete/{kode}', 'UserController@delete');

//REPORT
Route::get('report/buku', 'ReportController@buku');
Route::get('report/anggota', 'ReportController@anggota');
Route::get('report/peminjaman', 'ReportController@pinjam');
Route::get('report/pengembalian', 'ReportController@kembali');

});


Route::group(['middleware' => ['isKaryawan']], function(){
    Route::get('dashboard', function(){
        return view('template.template');
    });

//Buku
Route::get('buku/add', 'BukuController@add');
Route::get('buku/list', 'BukuController@daftar');
Route::post('buku/save', 'BukuController@simpan');
Route::get('buku/edit/{kode}', 'BukuController@edit');
Route::get('buku/delete/{kode}', 'BukuController@delete');

//REPORT
Route::get('report/buku', 'ReportController@buku');
Route::get('report/anggota', 'ReportController@anggota');
Route::get('report/peminjaman', 'ReportController@pinjam');
Route::get('report/pengembalian', 'ReportController@kembali');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
