@extends('layout/main');

@section('title', 'Daftar Jurusan')

@section('container-fuild')
    <div class="container-fluid">
        <div class="row" style="height: 500px; background-color:rgb(241, 242, 245); margin-top: 25px">
                <div class="col-10" style="margin-top:30px; margin-left: 50px" >
                    <h1 class="mt-3">Daftar Jurusan</h1>
                    <table class="table" >
                        <thead class="thead-dark">
                            <th scope="col" >No</th>
                            <th scope="col" >Nama Jurusan</th>
                            <th scope="col" >Prodi</th>
                            <th scope="col" >Aksi</th>
                        </thead>
                        <tbody>
                         @foreach($jurusan as $jrs) 
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $jrs->nama_jurusan }}</td>
                                <td>{{ $jrs->prodi }}</td>
                                <td>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div>
        </div>
    </div>
    @endsection
        