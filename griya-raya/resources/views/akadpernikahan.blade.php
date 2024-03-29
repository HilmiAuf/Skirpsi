@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container mt-5 layanan" style="width: 100%; height: 100%; min-height:69.2vh;">
    <img data-aos="zoom-in-up" src="/source/img/Top-layanan1.png" alt="">
    <div class="row ">
        @foreach ($layanans as $layanan)
        <div data-aos="fade-up" data-aos-duration="3000"
            class="col-sm-12 col-md-6 col-lg-4 mb-2 justify-content-start justify-content-start mt-3">
            <div class="card h-100">
                <div class="card-header" style="background-color: white ;border: none;" >
                <img src="{{ asset('storage/' . $layanan->foto) }}" class="card-img-top mt-2" alt="..." style="border-radius: 5px;">
            </div>
                <div class="card-body text-center">
                    <img src="/source/img/Batas-layanan.png" alt="">
                    <p class="card-title fs-3" style="font-family: Scheherazade;">{{ $layanan->judul}}</p>
                    <p class="card-text fw-bold">{{$layanan->ringkasan }}</p>
                    <a href="/akadpernikahan/{{ $layanan->id }}" class="btn btn-outline-dark fw-bold">Lihat Detail dan Pesan</a>
                    <img src="/source/img/Batas-layanan2.png" alt="">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <img data-aos="zoom-in-up" src="/source/img/Top-layanan2.png" alt="">
</div>
@endsection
