<style media="screen">
  table{ position: relative;border-collapse: collapse;width: 100%; }
  table td{ border: 1px; solid #000; padding: 5px; }
  h1, h2, p{ margin: 0; text-align: center;}
  p{ padding-bottom: 15px; margin-bottom: 15px; border-bottom: 8px double #000;}
  .title { background: #ccc; }
</style>

<h1>PERPUSTAKAAN FIKSI INTERNASIONAL</h1>
<h2>REPUBLIK INDONESIA</h2>
<p>Jl. Jalan No. 7 Papua, Telp : +62 081337 <br>www.perpusfiksi.com, perpus@perpusfiksi.com</p>

<table class="title">
  <tr>
    <td>No Pinjam</td>
    <td width="25%">No Induk Buku</td>
    <td width="20%">No Anggota</td>
    <td>Tanggal Pinjam</td>
    <td width="">Tanggal Kembali</td>
    <td>Denda</td>
  </tr>
  @foreach ($kembali as $rs)
  <tr>
    <td>{{ $rs->no_pinjam }}</td>
    <td>{{ $rs->no_induk_buku }}</td>
    <td>{{ $rs->no_anggota }}</td>
    <td>{{ $rs->tgl_pinjam }}</td>
    <td>{{ $rs->tgl_kembali }}</td>
    <td>{{ $rs->denda }}</td>
  </tr>
  @endforeach
</table>
