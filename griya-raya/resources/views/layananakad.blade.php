@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container layanan-user ">
    <img src="/source/img/Top-layanan1.png" alt="">
    <div class="row justify-content-center up">
        <div class="col-12">
            <img src="{{ asset('storage/' . $layanan->foto) }}" alt="">
        </div>
    </div>
    <div class="row justify-content-between paket" style="padding: 1%;">
        <div class="col-sm-12 col-md-6 col-lg-6 text-center pt-5 pb-5 paket">
            <img src="/source/img/Batas-layanan.png" alt="">
            <p class="fs-2">Package Rp. {{ $layanan->harga}} </p>
            <p > {!! $layanan->isi_paket !!}</p>
            <img src="/source/img/Batas-layanan2.png" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 isi-paket paket align-self-center" style="height: 90%; ">
            <img src="/source/img/Batas-layanan.png" alt="">
            <form action="/booking" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama" class="form-label">Phone Number</label>
                <input type="number" name="telepon" class="form-control mb-2" id="nama" aria-describedby="emailHelp">
                <label for="" class="form-label">Address</label>
                <input type="text" name="alamat" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="" class="form-label">Date</label>
                <input type="date" name="tanggal" class="form-control mb-2" id="exampleInputPassword1">
                <label for="" class="form-label">Participants</label>
                <input type="number" name="jumlah_pengunjung" class="form-control mb-3" id="exampleInputPassword1">
                <input type="hidden" name="category" value="{{$layanan->category}}">
                <input type="hidden" name="judul" value="{{$layanan->judul}}">
                <input type="hidden" name="harga" value="{{$layanan->harga}}">
                <input type="hidden" name="isi_paket" value="{{$layanan->isi_paket}}">
                <input type="hidden" name="foto" value="{{$layanan->foto}}">
                <input type="hidden" name="ringkasan" value="{{$layanan->ringkasan}}">
                <button type="submit" class="mb-2">BOOK NOW ! </button>
            </form>
            <img src="/source/img/Batas-layanan2.png" alt="">
        </div>
    </div>
    <img src="/source/img/Top-layanan2.png" alt="">
</div>
@endsection
