@extends('layout/main');

@section('title', 'Daftar Jurusan')

@section('container-fuild')
    <div class="container-fluid">
        <div class="row" style=" background-color:rgb(241, 242, 245); margin-top: 25px">
                <div class="col-8" style="margin-top:30px; margin-left: 50px; padding-bottom: 50px" >
                    <h1 class="mt-3">Daftar Jurusan</h1>
                    <a href="/jurusan/create" class="btn btn-primary my-3">Tambah Data</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        @foreach( $jurusan as $jrs )
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $jrs->nama_jurusan }}
                            <a href="/jurusan/{{ $jrs->id }} " class="badge badge-info">detail</a>
                        </li>
                        @endforeach
                    </ul>
                <div>
        </div>
    </div>
    @endsection
        