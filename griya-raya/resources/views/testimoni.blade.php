@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')


<div class="container testimoni" style="">
    <img src="/source/img/Top-layanan1.png" alt="">
    <div class="row">

        @auth
        <a href="add-testimoni"> <button class="btn btn-lg" style="float : right;"> add</button></a>
        @endauth

        @foreach ($testimonis as $testimoni)
        <div data-aos="fade-up" data-aos-duration="3000"
            class="col-sm-12 col-md-6 col-lg-4 mb-2 justify-content-start justify-content-start mt-3  ">
            <div class="card h-100">
                <div class="card-header" style="background-color: white ;border: none;">
                    <img src="/source/img/Batas-layanan.png" alt="">
                    <img style="border-radius:10px;" src="{{ asset('storage/' . $testimoni->foto) }}" class="" alt="...">
                </div>
                <div class="card-body ">
                    
                    <p class="fs-6 text-center">{{$testimoni->isi_testimoni }}</p>
                    <p class="fs-6">"{{ $testimoni->name}}"<p>
                    
                </div>
                <div class="card-footer">
                    <img src="/source/img/Batas-layanan2.png" alt="">
                  </div>
            </div>
        </div>
        @endforeach
    </div>
    <img src="/source/img/Top-layanan2.png" alt="">
</div>
@endsection
