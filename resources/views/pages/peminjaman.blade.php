@extends('template.body')
@section('judul')
    Peminjaman Buku
@stop
@section('actransaksi')
    active
@stop
@section('isicontent')
<style>
.modal-backdrop{
  z-index: -1;
}
.modal-content{
  margin-top: 100px;
}
</style>

<div class="col-md-12">
  @if($anggota=="")
  <form id="frmPinjam" action="{{url('trans/peminjaman')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    <div class="card">
      <div class="card-header bg-primary">
        <label class="col-sm-12" style="text-align:center;">Nomor Anggota</label>
      </div>
      <div class="card-body">
        <div class="row form-group">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="noang" placeholder="Nomor Anggota perpustakaan" value=""></div>
          <div class="col-sm-4"></div>
        </div>
      </div>
    </div>
  </form>
  @if(session('nopinjam'))
  <script>
    window.open("{{url('trans/struk-peminjaman/'.session('nopinjam'))}}", "_blank", "toolbar=0,scrollbars=0,resizable=0,top=0,left=0,width=400,height=600");
  </script>
  @endif
  @else
  <form id="frmPinjam" action="{{url('trans/peminjaman/save')}}" method="post">
    @csrf
    <div class="card">
      <!--- TAMPIL DATA PEMINJAMAN BUKU--->
      <div class="card-header">
        <h3 class="card-title">Data Peminjam Buku</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <input type="hidden" class="form-control" name="noang" value="{{ $anggota->no_anggota }}">
          <strong>{{ $anggota->nama }} ( {{ $anggota->no_anggota }} )</strong><br/>
          {{ $anggota->alamat." ".$anggota->kota }}<br/>
          Email : {{ $anggota->email }}<br/>
          Telepon : {{ $anggota->telp }}
        </div>
        <!--- PROSES PINJAM--->
        <div class="d-flex justify-content-end">
          <div class="card-tools">
            <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#m-buku">ADD BUKU</button>
          </div>
        </div>
        <h3 class="title">Detail Peminjaman Buku</h3>

        <!--- LIST BUKU YANG DIPINJAM --->
        <table class="table table-hover" style="margin-top= 15px;">
          <tbody id="lsBuku">
            <tr style="background:#ccc;">
              <th width="2%">#</th>
              <th width="15%">Kode Buku</th>
              <th>Judul</th>
              <th width="5%"></th>
            </tr>
          </tbody>
        </table>
        <!--- Untuk Memasukkan data buku ke table silahkan cek custom.js pada pulic --->
        <!--- FOOTER CARD --->
        <div class="card-footer">
          <button type="submit" class="btn btn-success btn-flat">SAVE</button>
          <a href="{{ url('trans/peminjaman') }}"><button type="button" class="btn btn-warning btn-flat">CANCEL</button></a>
        </div>
      </div>
    </div>
  </form>
  @endif
</div>
<!---List Data Buku--->
<div class="modal " id="m-buku">
  <div class="modal-dialog modal-md">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Data Buku Perpustakaan</h4>
      <button type="button" class="btn btn-danger btn-flat close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body">
      <table id="tabelnya" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="2%">#</th>
            <th width="81%">Judul</th>
            <th width="5%">Edisi</th>
            <th width="2%"></th>
          </tr>
        </thead>
        <tbody>
          <!---Menampilkan Data Buku--->
          @foreach($buku as $rs)
          <tr>
            <td>{{ $rs->kd_buku }}</td>
            <td>{{ $rs->judul }}</td>
            <td>{{ $rs->edisi }}</td>
            <td>
              <button class="btn btn-primary btn-xs" onclick="add_buku('{{ $rs->kd_buku }}','{{ $rs->judul }}')" data-dismiss="modal" name="button">PILIH</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
</div>


@stop
