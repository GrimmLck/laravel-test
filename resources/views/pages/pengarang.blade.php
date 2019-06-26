@extends('template.body')
@section('judul')
    Form Pengarang
@stop
@section('acpengarang')
    active
@stop
@section('isicontent')

<form action="{{url('pengarang/save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
@csrf
<div class="row">
    <div class="col-lg-12"></div>
        <div class="card center">
            <div class="card-header text-center">
                <strong class="">Data Pengarang</strong>
            </div>
            <div class="card-body card-block">
                <div class="row form-group" style="display:none">
                    <div class="col-sm-4">
                        <label type="hidden" for="text-input" class=" form-control-label"></label>
                    </div>
                    <div class="col-sm-8">
                        <input type="hidden" name="kd_pengarang" value="{{$pengarang->kd_pengarang}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="text-input" class=" form-control-label">Nama Pengarang</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="text-input" name="nama" placeholder="Nama Pengarang" class="form-control" value="{{$pengarang->nama_pengarang}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="email-input" class=" form-control-label">Kota</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="email-input" name="kota" placeholder="Kota" class="form-control" value="{{$pengarang->kota}}">

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
