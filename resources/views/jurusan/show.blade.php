@extends('layout/main');

@section('title', 'Daftar Jurusan')

@section('container-fuild')
    <div class="container-fluid">
        <div class="row" style="height: 500px; background-color:rgb(241, 242, 245); margin-top: 25px">
                <div class="col-6" style="margin-top:30px; margin-left: 50px" >
                    <h1 class="mt-3">Detail Jurusan</h1>
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">{{$jurusan->nama_jurusan}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$jurusan->prodi}}</h6>
                            <a href="{{$jurusan->id}}/edit" class="btn btn-primary my-3">Edit</a>
                            <form action="{{$jurusan->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger my-3">Delete</button>
                            </form>
                            <a href="/jurusan" class="card-link">Kembali</a>
                        </div>
                    </div>
                <div>
        </div>
    </div>
    @endsection
        