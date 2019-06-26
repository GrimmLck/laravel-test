@extends('template.body')
@section('judul')
    Form Anggota
@stop
@section('acanggota')
    active
@stop
@section('isicontent')

<form id="frm" class="form-horizontal" method="post" action="{{url('anggota/save')}}" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-header bg-primary">
                <strong>Avatar Anggota</strong>
            </div>
            <div class="card-body">
            @if($anggota->foto=="")
                <img id="gambarbuk" src="{{asset('images/avatar.jpg')}}" alt="">
            @else
                <img id="gambarbuk" src="{{asset('images/avatar/'.$anggota->foto)}}" alt="">
            @endif
                <input id="file" type="file" name="avatar" style="display:none;">
                <input type="hidden" name="old-foto" value="{{$anggota->foto}}">
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Form Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            @if($anggota->no_anggota=="")
            <div class="card-body">
                <div class="row form-group">
                    <label class="col-sm-2 control-label">Nama Anggota</label>

                    <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Nama Anggota" name="nama" value="{{$anggota->nama}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label">Tempat / Tgl Lahir</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control"  placeholder="Tempat Lahir" name="tmpt" value="{{$anggota->tempat}}">
                    </div>
                    <div class="col-sm-5">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name="tgl" placeholder="yyyy-mm-dd" value="{{$anggota->tgl_lahir}}">

                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <label>
                            <input type="radio" name="jk" class="minimal" value="1" {{$anggota->jk==1 ? 'checked' :'checked'}}> Laki-Laki
                        </label>
                        <label>
                            <input type="radio" name="jk" class="minimal" value="2" {{$anggota->jk==2 ? 'checked' :''}}> Perempuan
                        </label>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat">{{$anggota->alamat}}</textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label">Kota</label>

                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
                        <input type="text" class="form-control" placeholder="Kota" name="kota" value="{{$anggota->kota}}">
                    </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label">No Telp</label>

                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" placeholder="Telephone" name="telp" value="{{$anggota->telp}}">
                    </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$anggota->email}}">
                    </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            @else
                <div class="card-body">
                    <div class="row form-group" style="">
                        <strong class="col-sm-5">No Anggota : {{$anggota->no_anggota}}</strong>

                        <input type="hidden" class="form-control"  placeholder="Nomor Anggota" name="kd_anggota" value="{{$anggota->kd_anggota}}">

                        <!---<input id="kode" type="text" class="form-control"  placeholder="Nomor Anggota" name="no" value="{{$anggota->no_anggota}}">--->
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-2 control-label">Nama Anggota</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Nama Anggota" name="nama" value="{{$anggota->nama}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-2 control-label">Tempat / Tgl Lahir</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control"  placeholder="Tempat Lahir" name="tmpt" value="{{$anggota->tempat}}">
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="tgl" placeholder="yyyy-mm-dd" value="{{$anggota->tgl_lahir}}">

                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="jk" class="minimal" value="1" {{$anggota->jk==1 ? 'checked' :'checked'}}> Laki-Laki
                            </label>
                            <label>
                                <input type="radio" name="jk" class="minimal" value="2" {{$anggota->jk==2 ? 'checked' :''}}> Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-sm-2 control-label">Alamat</label>

                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="alamat">{{$anggota->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-2 control-label">Kota</label>

                        <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
                            <input type="text" class="form-control" placeholder="Kota" name="kota" value="{{$anggota->kota}}">
                        </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-2 control-label">No Telp</label>

                        <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Telephone" name="telp" value="{{$anggota->telp}}">
                        </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{$anggota->email}}">
                        </div>
                        </div>
                    </div>

                </div>
              @endif
                <!-- /.box-body -->
                <div class="box-footer">

                <button type="submit" class="btn btn-info pull-right">Simpan Data</button>
                </div>
                <!-- /.box-footer -->

        </div>

    </div>

</div>
</form>

@stop
