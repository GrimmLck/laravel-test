@extends('template.body')
@section('judul')
    Pengembalian Buku
@stop
@section('actransaksi')
    active
@stop
@section('isicontent')
<div class="col-md-12">
  @if($pinjam=="")
  <form id="frmPinjam" action="{{url('trans/pengembalian')}}" method="post">
    @csrf
    <div class="card card-center">
      <div class="card-header">
        <div class="row form-group">
          <label class="col-sm-12" style="text-align:center;">Nomor Peminjaman</label>
          <div class="col-sm-4"></div>
          <div class="col-sm-4"><input type="text" class="form-control" placeholder="Nomor Peminjaman Buku" name="nopinjam" value=""></div>
          <div class="col-sm-4"></div>
        </div>
      </div>
    </div>
  </form>
  @else
  <form id="frmPinjam" action="{{url('trans/pengembalian/save')}}" method="post">
    @csrf
    <div class="card">
      <!--- Tampil data peminjam buku --->
      <div class="card-header">
        <h3 class="card-title">No Pinjam : #{{ $pinjam[0]->no_pinjam }}</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <input type="hidden" class="form-control" name="nopinjam" value="{{ $pinjam[0]->no_pinjam }}">
          <strong>ID Anggota : {{ $pinjam[0]->no_anggota }}<br/> Nama : {{ $pinjam[0]->nama }}</strong>
        </div>
      </div>
      <!--- Proses pinjam -->
      <div class="card-header">
        <h3 class="card-title">Detail Peminjaman Buku</h3>
      </div>
      <!--- Table List Buku yang Dipinjam--->
      <table class="table table-hover" style="margin-top:15px;">
        <tbody id="lsBuku">
          <tr style="background:#ccc;">
            <th width="15p%">kode Buku</th>
            <th>Judul</th>
            <th width="5%">Telat</th>
            <th width="5%">Denda</th>
          </tr>
          @foreach($pinjam as $rs)
          <tr>
            <th width="10%">{{ $rs->kd_buku }}<input type="hidden" name="kd_buku[]" value="{{ $rs->kd_buku }}"></th>
            <th>{{ $rs->judul }}</th>
            <th width="8%">
              <!--- Menghitung selisih hari --->
              @php
                $start = new DateTime($rs->tgl_kembali);
                $end = new DateTime();
                $selisih = $end->diff($start);
                if($end>$start){
                  $telat = $selisih->d;
                }else{
                  $telat = 0;
                }
                echo $telat . " Hari"
              @endphp
            </th>
            <th width="8%">
              <!---Denda 2000/hari--->
              {{ $telat * 2000 }}
              <input type="hidden" name="denda" value="{{ $selisih->d * 2000 }}">
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!---Footer Card--->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary" name="button">SAVE</button>
        <a href="{{url('trans/pengembalian')}}"><button type="button" class="btn btn-danger" name="button">CANCEL</button></a>
      </div>
    </div>
  </form>
  @endif
</div>

@stop
