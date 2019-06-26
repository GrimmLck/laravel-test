@extends('template.body')
@section('judul')
    List Kategori
@stop
@section('ackategori')
    active
@stop
@section('isicontent')
<div class="row">
    <div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-end">
        <a href="{{url('kategori/add')}}">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-plus-circle"> Add Kategori</i>
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
                    <th>Nama Kategori</th>
                    <th>Singkatan</th>
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
                    <td>{{$rs->nama_kategori}}</td>
                    <td>
                        <span class="block-email">{{$rs->singkatan}}</span>
                    </td>
                    <td>
                        <div class="table-data-feature">
                                <a href="kategori/{{$rs->kd_kategori}}/edit"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                                </button></a>
                                <a href="#" class="listKategori_delete" kd_kategori="{{$rs->kd_kategori}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                    <th>Nama Kategori</th>
                    <th>Singkatan</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@stop
