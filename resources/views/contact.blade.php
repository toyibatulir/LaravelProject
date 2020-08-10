@extends('layout/main');

@section('title', 'Contact')

@section('container-fuild')
        <div class="container-fluid">
        <div class="row p-4 " style="background-color:rgb(241, 242, 245); margin-top: 25px">
            <div class="row">
                <div class="col-md-12 about" align="center">
                    Contact Us
                </div>
                <div class="col-md-6">
                    <div class="decoration2">
                        "Silahkan bertanya seputar Restokita lebih lengkap melalui pesan E-mail. Kami siap melayani Anda dengan baik"
                    </div>
                </div>
                <div class="col-md-6 ">
                <div class="kotak_pesan">
                <form action="message.php" name="form1" method="POST">
                    <label>Your Name</label>
                    <input type="text" name="yourname" class="form_pesan" placeholder="Nama .." required autofocus>

                    <label>Your E-mail</label>
                    <input type="text" name="email" class="form_pesan" placeholder="E-mail .." required>

                    <label>Message</label>
                    <input type="text" name="message" class="form_pesan2" placeholder="Ketik Pesan .." required>

                    <br/>
                    <br/>
                </form>
                <button type="button" class="tombol_kirim">Send Message</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
        