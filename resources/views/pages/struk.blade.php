<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Peminjaman</title>
  </head>
  <body>
    <strong>
      Kode Anggota : {{$data[0]->no_anggota}}<br>
      Nama : {{$data[0]->nama}}<br>
    </strong>
    Tanggal Pinjam : {{$data[0]->tgl_pinjam}}<br>
    Tanggal Kembali : {{$data[0]->tgl_kembali}}<br>

    <table id="tabelnya" class="table table-bordered table-striped" border="1">
      <thead>
        <tr>
          <th width="20%">Kode</th>
          <th>Judul</th>
        </tr>
      </thead>
      <tbody>
        <!--- Menampilkan data Anggota --->
        @foreach ($data as $rs)
        <tr>
          <td>{{ $rs->kd_buku }}</td>
          <td>{{ $rs->judul }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
