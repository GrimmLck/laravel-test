@extends('template.body')
@section('judul')
    Form User
@stop
@section('acuser')
    active
@stop
@section('isicontent')
<div class="col-md-12">
  <form class="form-horizontal" method="post" action="{{url('user/save')}}" enctype="multipart/form-data">
  @csrf
  <div class="row">
      <div class="col-md-3">
          <div class="card text-center">
              <div class="card-header bg-primary">
                  <strong>Avatar User</strong>
              </div>
              <div class="card-body">
              @if($user->avatar=="")
                  <img id="gambarbuk" src="{{asset('images/avatar.jpg')}}" alt="">
              @else
                  <img id="gambarbuk" src="{{asset('images/user/'.$user->avatar)}}" alt="">
              @endif
                  <input id="file" type="file" name="avatar" style="display:none;">
                  <input type="hidden" name="old-foto" value="{{$user->avatar}}">
              </div>
          </div>
      </div>

      <div class="col-md-9">
          <div class="card">
              <div class="card-header text-center">
                  <h3 class="card-title">Form Data Anggota</h3>
              </div>
              <!-- /.box-header -->

                  <div class="card-body">
                      <div class="row form-group" style="display:none;">
                          <label class="col-sm-2 control-label">ID</label>

                          <div class="col-sm-10">
                          <input type="hidden" name="token" value="{{csrf_token()}}">
                          <input type="hidden" class="form-control" placeholder="id" name="id" value="{{$user->id}}">
                          </div>
                      </div>
                      <div class="row form-group">
                          <label class="col-sm-2 control-label">Nama User</label>

                          <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Nama User" name="name" value="{{$user->name}}">
                          </div>
                      </div>
                      <div class="row form-group">
                          <label class="col-sm-2 control-label">Email</label>

                          <div class="col-sm-10">
                          <input type="email" class="form-control"  placeholder="Email" name="email" value="{{$user->email}}">
                          </div>
                      </div>
                      <div class="row form-group">
                          <label class="col-sm-2 control-label">Password</label>

                          <div class="col-sm-10">
                          <input type="password" class="form-control"  placeholder="Password" name="pass" value="{{$user->password}}">
                          </div>
                      </div>
                      <div class="row form-group">
                          <label class="col-sm-2 control-label">Alamat</label>

                          <div class="col-sm-10">
                              <input type="text" class="form-control"  placeholder="Alamat" name="alamat" value="{{$user->alamat}}">
                          </div>
                      </div>

                      <div class="row form-group">
                          <label class="col-sm-2 control-label">Jenis Kelamin</label>
                          <div class="col-sm-10">
                              <label>
                                  <input type="radio" name="jk" class="minimal" value="1" {{$user->jk==1 ? 'checked' :'checked'}}> Laki-Laki
                              </label>
                              <label>
                                  <input type="radio" name="jk" class="minimal" value="2" {{$user->jk==2 ? 'checked' :''}}> Perempuan
                              </label>
                          </div>
                      </div>
                      <div class="row form-group">
                          <label class="col-sm-2 control-label">Kota</label>

                          <div class="col-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
                              <input type="text" class="form-control" placeholder="Kota" name="kota" value="{{$user->kota}}">
                          </div>
                          </div>
                      </div>
                      <div class="row form-group">
                          <label class="col-sm-2 control-label">No Telp</label>

                          <div class="col-sm-10">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                              <input type="text" class="form-control" placeholder="Telephone" name="telp" value="{{$user->telp}}">
                          </div>
                          </div>
                      </div>
                      <div class="row form-group">
                          <label class="col-sm-2 control-label">Level</label>

                          <div class="col-sm-10">
                              <select class="" name="level">
                                <option value="1">Admin</option>
                                <option value="2">Karyawan</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">

                  <button type="submit" class="btn btn-info pull-right">Simpan Data</button>
                  </div>
                  <!-- /.box-footer -->

          </div>

      </div>

  </div>
  </form>
</div>


@stop
