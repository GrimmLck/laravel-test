@extends('template.body')
@section('judul')
    List User
@stop
@section('acuser')
    active
@stop
@section('isicontent')
<div class="row">
    <div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-end">
        <a href="{{url('user/add')}}">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-plus-circle"> Add User</i>
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
                    <th>Nama User</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>kota</th>
                    <th>Telepon</th>
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
                    <td>{{$rs->name}}</td>
                    <td>
                        <span class="block-email">{{$rs->alamat}}</span>
                    </td>
                    <td class="desc">@if($rs->jk=="1")Laki-laki @else Perempuan @endif</td>
                    <td>{{$rs->kota}}</td>
                    <td>
                        <span class="status--process">{{$rs->telp}}</span>
                    </td>
                    <td>{{$rs->email}}</td>
                    <td>
                        <div class="table-data-feature">
                                <a href="{{url('user/edit/'.$rs->id)}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                                </button></a>
                                <a href="#" class="user_delete" user_id="{{$rs->id}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                    <th>Telepon</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@stop
