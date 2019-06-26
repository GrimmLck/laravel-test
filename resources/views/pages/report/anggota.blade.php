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
    <td width="20%">No Anggota</td>
    <td>Nama</td>
    <td width="10%">Alamat</td>
    <td>Kota</td>
    <td width="15">Email</td>
  </tr>
  @foreach ($anggota as $rs)
  <tr>
    <td>{{ $rs->no_anggota }}</td>
    <td>{{ $rs->nama }}</td>
    <td>{{ $rs->alamat }}</td>
    <td>{{ $rs->kota }}</td>
    <td>{{ $rs->email }}</td>
  </tr>
  @endforeach
</table>
