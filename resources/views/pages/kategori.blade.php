@extends('template.body')
@section('judul')
    Form Kategori
@stop
@section('ackategori')
    active
@stop
@section('isicontent')

<form action="{{url('kategori/save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
<div class="row">
    <div class="col-lg-12"></div>
        <div class="card center">
            <div class="card-header text-center">
                <strong class="">Data Kategori</strong>
            </div>
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="text-input" class=" form-control-label">Nama Kategori</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="hidden" name="kd_kategori" value="{{$kategori->kd_kategori}}">
                        <input type="text" id="text-input" name="nama" placeholder="Nama Kategori" class="form-control" value="{{$kategori->nama_kategori}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="email-input" class=" form-control-label">Singkatan</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="email-input" name="singkatan" placeholder="Singkatan" class="form-control" value="{{$kategori->singkatan}}">

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
        </div>
    </div>
    
</div>
</form>
@stop
