@extends('template.body')
@section('judul')
    Daftar Buku
@stop
@section('acbuku')
    active
@stop
@section('isicontent')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="">
                <h2 class="box-title">Daftar Buku Perpustakaan</h2>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{url('buku/add')}}">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus-circle"> Add Item</i>
                </button></a>
            </div>
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
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Edisi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $rsbuku)
            <tr class="tr-shadow">
                <td>
                    <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label>
                </td>
                <td>{{$rsbuku->kd_buku}}</td>
                <td>
                    <span class="block-email">{{$rsbuku->judul}}</span>
                </td>
                <td class="desc">{{$rsbuku->nama_pengarang}}</td>
                <td>{{$rsbuku->nama_penerbit}}</td>
                <td>
                    <span class="status--process">{{$rsbuku->nama_kategori}}</span>
                </td>
                <td>{{$rsbuku->edisi}}</td>
                <td>
                  <div class="table-data-feature">
                    <a href="{{url('buku/edit/'.$rsbuku->id)}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                    </button></a>
                    <a href="{{url('buku/delete/'.$rsbuku->id)}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Edisi</th>
                <th></th>
            </tr>
        </thead>
    </table>
</div>


@stop
