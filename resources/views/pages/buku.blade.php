@extends('template.body')
@section('judul')
    Form Buku
@stop
@section('acbuku')
    active
@stop
@section('isicontent')

<form id="frmBuku" action="{{url('buku/save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
<div class="row">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-header bg-primary">
                <strong>Gambar Buku</strong>
            </div>
            <div class="card-body">
            @if($buku->cover=="")
                <img id="gambarbuk" src="{{asset('images/upload.jpg')}}" alt="">
            @else
                <img id="gambarbuk" src="{{asset('images/cover/'.$buku->cover)}}" alt="">
            @endif
                <input id="file" type="file" name="sampul" style="display:none;">
                <input type="hidden" name="old-foto" value="{{$buku->cover}}">
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header text-center">
                <strong>Data Buku</strong>
            </div>
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="text-input" class=" form-control-label">Kode Buku</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="{{$buku->id}}">
                        <input type="text" id="kode" name="kode" placeholder="Kode Buku" class="form-control" value="{{$buku->kd_buku}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="email-input" class=" form-control-label">Judul Buku</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="judul" name="judul" placeholder="Judul" class="form-control" value="{{$buku->judul}}">

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="select" class=" form-control-label">Pengarang</label>
                    </div>
                    <div class="col-sm-10">
                        <select name="pengarang" id="select" class="form-control">
                            <option>--Please select--</option>
                            @foreach ($pengarang as $rs)
                            <option selected="{{$buku->kd_pengarang==$rs->kd_pengarang ? 'selected' :''}}" value="{{$rs->kd_pengarang}}">{{$rs->nama_pengarang}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="select" class=" form-control-label">Penerbit</label>
                    </div>
                    <div class="col-sm-10">
                        <select name="penerbit" id="select" class="form-control">
                            <option>--Please select--</option>
                        @foreach ($penerbit as $rspenerbit)
                            <option selected="{{$buku->kd_penerbit==$rspenerbit->kd_penerbit ? 'selected' :''}}" value="{{$rspenerbit->kd_penerbit}}">{{$rspenerbit->nama_penerbit}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="email-input" class=" form-control-label">Tempat/Tahun Terbit</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="tempat" name="tempat" placeholder="Tempat" class="form-control" value="{{$buku->tempat_terbit}}">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" id="tahun" name="tahun" placeholder="Tahun" class="form-control" value="{{$buku->tahun_terbit}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="select" class=" form-control-label">Kategori</label>
                    </div>
                    <div class="col-sm-10">
                        <select name="kategori" id="select" class="form-control">
                            <option>--Please select--</option>
                            @foreach ($kategori as $rs)
                            <option selected="{{$buku->kd_kategori==$rs->kd_kategori ? 'selected' :''}}" value="{{$rs->kd_kategori}}">{{$rs->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="email-input" class=" form-control-label">Halaman</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="halaman" name="halaman" placeholder="Halaman" class="form-control" value="{{$buku->halaman}}">

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="email-input" class=" form-control-label">Edisi</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="edisi" name="edisi" placeholder="Edisi" class="form-control" value="{{$buku->edisi}}">

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label for="email-input" class=" form-control-label">ISBN</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="isbn" name="isbn" placeholder="ISBN" class="form-control" value="{{$buku->ISBN}}">

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="button" class="btn btn-danger btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Cancel
                </button>
            </div>
        </div>
    </div>
</div>
</form>
@stop
