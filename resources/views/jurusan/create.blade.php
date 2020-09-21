@extends('layout/main');

@section('title', 'Daftar Jurusan')

@section('container-fuild')
    <div class="container-fluid">
        <div class="row" style="height: 500px; background-color:rgb(241, 242, 245); margin-top: 25px">
                <div class="col-8" style="margin-top:30px; margin-left: 50px" >
                    <h1 class="mt-3">Form Tambah Data Jurusan</h1>
                    <form method="post" action="/jurusan">
                    @csrf
                        <div class="form-group">
                            <label for="nama_jurusan">Nama Jurusan</label>
                            <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" 
                            placeholder="Masukkan Nama Jurusan" name="nama_jurusan" value="{{old('nama_jurusan')}}">
                            @error('nama_jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" 
                            placeholder="Masukkan Prodi" name="prodi" value="{{old('prodi')}}">
                            @error('prodi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        
                    </form>
                    </div>
                <div>
        </div>
    </div>
    @endsection
        