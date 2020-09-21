@extends('layout/main');

@section('title', 'Restokita')

@section('container-fuild')
        <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">It's not just Food, it is an Experience
                    </div>
                    <div class="title2">Let just experience various country food at one place
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <div class="col-md-11 offset-1">
                        <div class="search">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="search2">SEARCH</h5>
                                    <input class="input" type="text" placeholder="food Title Keyword">
                                </div>
                                <div class="col-md-4">
                                    <h5 class="search2">LOCATION</h5>
                                    <input class="input" type="text" placeholder="Select Location">
                                </div>
                                <div class="col-md-4">
                                    <button class=" searchbiru">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-4 " style="background-color:rgb(241, 242, 245); margin-top: 50px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="padding-top:80px">
                        <div class="rec">
                            Our Chefs
                        </div>
                        <div class="lrm">
                            Restokita memiliki chef yang pastinya sangat pro dalam memasak. Jadi masakan di Restokita
                            ini tidak perlu diragukan lagi !
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary more">
                                MORE CHEFS
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top:90px">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card custom" style="width: 270px;height: 350px;border-radius:10px;padding-top: 10px">
                                    <center><img src="{{ asset('img/chef1.jpg') }}" class="card-img-top" style="width: 180px; height: 180px;"></center>
                                    <div class="card-body">
                                        <div class="kotak">
                                            <div class="row">
                                                <div class="col-md-12 self">
                                                    <div class="chefname">Chef (Mrs)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card custom" style="width: 270px;height: 350px;border-radius:10px;padding-top: 10px">
                                    <center><img src="{{ asset('img/chef2.jpg') }}" class="card-img-top" style="width: 180px; height: 180px;"></center>
                                    <div class="card-body">
                                        <div class="kotak">
                                            <div class="row">
                                                <div class="col-md-12 self">
                                                    <div class="chefname">Chef (Mr)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card custom" style="width: 270px;height: 350px;border-radius:10px;padding-top: 10px">
                                    <center><img src="{{ asset('img/chef2.jpg') }}" class="card-img-top" style="width: 180px; height: 180px;"></center>
                                    <div class="card-body">
                                        <div class="kotak">
                                            <div class="row">
                                                <div class="col-md-12 self">
                                                    <div class="chefname">Chef (Mr)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card custom" style="width: 270px;height: 350px;border-radius:10px;padding-top: 10px">
                                    <center><img src="{{ asset('img/chef1.jpg') }}" class="card-img-top" style="width: 180px; height: 180px;"></center>
                                    <div class="card-body">
                                        <div class="kotak">
                                            <div class="row">
                                                <div class="col-md-12 self">
                                                    <div class="chefname">Chef (Mrs)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container k2">
                    <div class="row">
                        <div class="col-md-7 do">
                            Let's find your favorite food here!
                        </div>
                        <div class="col-md-12" align="center">
                            <button class=" post col-md-4">FIND MENUS</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-4 news">
                        Our Menus
                    </div>
                </div>
                <div class="row" style="padding-top: 45px">
                    <div class="col-md-3">
                        <div class="card custom" style="width: 270px;height: 430px;border-radius:10px;padding: 0px">
                            <img src="{{ asset('img/salmon2.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                                <div class="judul" style="margin-top:6px;text-align: start;font-size: 20px">Salmon - lorem ipsum
                                    dolor sit</div>
                                <p class="card-text teks">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa
                                    elementum eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card custom" style="width: 270px;height: 430px;border-radius:10px;padding: 0px">
                            <img src="{{ asset('img/telur.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <div class="judul" style="margin-top:6px;text-align: start;font-size: 20px">Telur - lorem ipsum
                                    dolor sit</div>
                                <p class="card-text teks">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa
                                    elementum eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card custom" style="width: 270px;height: 430px;border-radius:10px;padding: 0px">
                            <img src="{{ asset('img/oatmeal.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <div class="judul" style="margin-top:6px;text-align: start;font-size: 20px">Oatmeal - lorem ipsum
                                    dolor sit</div>
                                <p class="card-text teks">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa
                                    elementum eu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card custom" style="width: 270px;height: 430px;border-radius:10px;padding: 0px">
                            <img src="{{ asset('img/ubi.jpeg') }}" class="card-img-top">
                            <div class="card-body">
                                <div class="judul" style="margin-top:6px;text-align: start;font-size: 20px">Ubi - lorem ipsum
                                    dolor sit</div>
                                <p class="card-text teks">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa
                                    elementum eu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" align="center">
                    <div class="col-md-12" >
                            <button class="moremenus col-md-2">MORE MENUS</button>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    @endsection
        