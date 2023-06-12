@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')
    <div class="container " style="width: 100%; height: 100%;">
        <div class="row admin">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-2 justify-content-start ">
                <div class="card text-center" style="background-color: #00897A;">
                    <img src="/source/img/home.png" class="card-img-top" alt="...">
                    <h5 class="card-title">Layanan</h5>
                    <div class="card-body" style="background-color: #00796A;">
                        <a href="/layanan-admin" class=""><img src="/source/img/next.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-4 mb-2 justify-content-start">
                <div class="card text-center justify-content-center" style="background-color: #3949AB;" href="/">
                    <img src="/source/img/testimoni.png" class="card-img-top" alt="...">
                    <h5 class="card-title">Testimoni</h5>
                    <div class="card-body" style="background-color: #303e9f;">
                        <a href="/testimoni-admin" class=""><img src="/source/img/next.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-4 mb-2 justify-content-start">
                <div class="card text-center" style="background-color: #d81a60;">
                    <img src="/source/img/Calendar.png" class="card-img-top" alt="...">
                    <h5 class="card-title">Pesanan</h5>
                    <div class="card-body" style="background-color: #c2175b;">
                        <a href="/book-admin" class=""><img src="/source/img/next.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-4 mb-2 justify-content-start">
                <div class="card text-center" style="background-color: #757575;">
                    <img src="/source/img/Profile.png" class="card-img-top" alt="...">
                    <h5 class="card-title">Pengguna</h5>
                    <div class="card-body" style="background-color: #616161;">
                        <a href="/user-admin" class=""><img src="/source/img/next.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
