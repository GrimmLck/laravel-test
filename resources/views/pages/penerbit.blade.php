@extends('template.body')
@section('judul')
    Form Penerbit
@stop
@section('acpenerbit')
    active
@stop
@section('isicontent')

<form action="{{url('penerbit/save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
<div class="row">
    <div class="col-lg-12"></div>
        <div class="card center">
            <div class="card-header text-center">
                <strong class="">Data Penerbit</strong>
            </div>
            <div class="card-body card-block">
                <div class="row form-group" style="display:none">
                    <div class="col-sm-4">
                        <label type="hidden" for="text-input" class=" form-control-label"></label>
                    </div>
                    <div class="col-sm-8">
                        <input type="hidden" name="kd_penerbit" value="{{$penerbit->kd_penerbit}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="text-input" class=" form-control-label">Nama Penerbit</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="text-input" name="nama" placeholder="Nama Penerbit" class="form-control" value="{{$penerbit->nama_penerbit}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="email-input" class=" form-control-label">Kota</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="email-input" name="kota" placeholder="Kota" class="form-control" value="{{$penerbit->kota}}">

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
