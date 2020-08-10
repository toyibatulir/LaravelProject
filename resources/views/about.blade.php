@extends('layout/main');

@section('title', 'About')

@section('container-fuild')
        <div class="container-fluid">
        <div class="row p-4 " style="background-color:rgb(241, 242, 245); margin-top: 25px">
            <div class="row">
                <div class="col-md-12 about" align="center">
                    About
                </div>
                <div class="col-md-6">
                    <div class="decoration">
                        <div class="gb5">
                            <img src="{{ asset('img/bg1.jpg') }}" class="imager">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 lrm2">
                    Restokita | adalah sebuah restoran berbasis web yang menyediakan berbagai macam makanan 
                    mulai dari makanan tradisional sampai yang lagi hits di jaman sekarang. Restokita juga memiliki chef
                    yang pastinya sangat pro dalam memasak. Jadi gak bakalan rugi beli makanan di Restokita.
                    <div class="row">
                        <div class="col-md-2">
                            <div class="ellipse">
                                <div class="petik">
                                    “
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 sret2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
        