@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')


<div class="container navbar testimoni ">
    <img  data-aos="zoom-in-up"  src="/source/img/Top-layanan1.png" alt="">
    <div class="row">
        <a class="text-center" href="/testimoni" style="text-decoration: none;">
            <span class="satu fs-2">Griya</span>
            <span class="dua fs-2">Raya</span>
            <span class="dua fs-2"> | Testimoni</span>
        </a>
        @auth
        <a href="add-testimoni"> <button class="btn btn-lg mt-4" style="float : right;"> + Testimoni</button></a>
        @endauth

        @foreach ($testimonis as $testimoni)
        <div data-aos="fade-up" data-aos-duration="3000"
            class="col-sm-12 col-md-6 col-lg-3 mb-2 justify-content-start justify-content-start mt-3  ">
            <div class="card h-100">
                <div class="card-header" style="background-color: white ;border: none;">
                    <img src="/source/img/Batas-layanan.png" alt="">
                    <img style="border-radius:10px;" src="{{ asset('storage/' . $testimoni->foto) }}" class="" alt="...">
                </div>
                <div class="card-body ">
                    <p class="fs-6 fw-bold">{{ $testimoni->name}}<p>
                    <p class="fs-6" style="text-align: justify;">"{{$testimoni->isi_testimoni}}"</p>
                </div>
                <div class="card-footer">
                    <img src="/source/img/Batas-layanan2.png" alt="">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <img  data-aos="zoom-in-up" src="/source/img/Top-layanan2.png" alt="">
</div>
@endsection
