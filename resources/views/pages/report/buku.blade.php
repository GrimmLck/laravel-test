<style media="screen">
  table{ position: relative; border-collapse: collapse;width: 100%; }
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
    <td width="10%">Kode</td>
    <td width="50%">Judul</td>
    <td>Pengarang</td>
    <td>Penerbit</td>
    <td>Edisi</td>
  </tr>
  @foreach ($buku as $rs)
  <tr>
    <td>{{ $rs->kd_buku }}</td>
    <td>{{ $rs->judul }}</td>
    <td>{{ $rs->nama_pengarang }}</td>
    <td>{{ $rs->nama_penerbit }}</td>
    <td>{{ $rs->edisi }}</td>
  </tr>
  @endforeach
</table>
