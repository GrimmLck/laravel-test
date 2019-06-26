@extends('template.body')
@section('judul')
    Dashboard
@stop
@section('isicontent')
<center>
    <img src="{{asset('images/perpus.png')}}" alt="" style="width:70%;margin=0 auto;display:block;">
    <p><h1 class="welcome" style="color: #000;">Selamat Datang @if(Auth::user()->lv==1) Admin @else Karyawan @endif</h1></p>
</center>
@stop
