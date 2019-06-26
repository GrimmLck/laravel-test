@extends('template.body')
@section('judul')
    List Anggota
@stop
@section('acanggota')
    active
@stop
@section('isicontent')
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-end">
        <a href="{{url('anggota/add')}}">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-plus-circle"> Add Anggota</i>
        </button></a>
        </div>
    </div>
  </div>
  <div class="table-responsive table-responsive-data2">
      <table class="table table-data2">
          <thead>
              <tr>
                  <th>
                      <label class="au-checkbox">
                          <input type="checkbox">
                          <span class="au-checkmark"></span>
                      </label>
                  </th>
                  <th>No Anggota</th>
                  <th>Nama Anggota</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
          @foreach($data as $rs)
              <tr class="tr-shadow">
                  <td>
                      <label class="au-checkbox">
                          <input type="checkbox">
                          <span class="au-checkmark"></span>
                      </label>
                  </td>
                  <td>{{$rs->no_anggota}}</td>
                  <td>
                      <span class="block-email">{{$rs->nama}}</span>
                  </td>
                  <td class="desc">@if($rs->jk=="1")L @else P @endif</td>
                  <td>{{$rs->alamat}}</td>
                  <td>{{$rs->email}}</td>
                  <td>
                    <div class="table-data-feature">
                      <a href="anggota/{{$rs->kd_anggota}}/edit"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                      <i class="zmdi zmdi-edit"></i>
                      </button></a>
                      <a href="#" class="anggota_delete" no_anggota="{{$rs->no_anggota}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="zmdi zmdi-delete"></i>
                      </button></a>
                    </div>
                  </td>
              </tr>
              <tr class="spacer"></tr>
              @endforeach
          </tbody>
          <thead>
            <tr>
                <th>
                    <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label>
                </th>
                <th>No Anggota</th>
                <th>Nama Anggota</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Email</th>
                <th></th>
            </tr>
          </thead>
      </table>
  </div>
</div>
@stop
