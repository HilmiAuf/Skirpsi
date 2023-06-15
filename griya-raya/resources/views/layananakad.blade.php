@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container layanan-user ">
    <img data-aos="zoom-in-up" src="/source/img/Top-layanan1.png" alt="">
    <div class="row justify-content-center up">
        <div class="col-12">
            <img data-aos="fade-up" data-aos-duration="3000" src="{{ asset('storage/' . $layanan->foto) }}" alt="">
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="3000" class="row justify-content-between paket" style="padding: 1%;">
        <div class="col-sm-12 col-md-6 col-lg-6 text-center pt-5 pb-5 paket">
            <img src="/source/img/Batas-layanan.png" alt="">
            <p class="fs-2">Package Rp {{ moneyFormat($layanan->harga)}} </p>
            <p > {!! $layanan->isi_paket !!}</p>
            <img src="/source/img/Batas-layanan2.png" alt="">
        </div>
        <div  class="col-sm-12 col-md-6 col-lg-4 isi-paket paket align-self-center" style="height: 90%; ">
            <img src="/source/img/Batas-layanan.png" alt="">
            <form action="/booking" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama" class="form-label">Nomor Telephone</label>
                <input type="number" min="1" step="1" onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode<=57" pattern="[0-9]+" name="telepon" class="form-control mb-2  @error('telepon') is-invalid @enderror" id="nama" required >
                @error('telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror mb-2" id="exampleInputEmail1" required>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control  @error('tanggal') is-invalid @enderror mb-2" id="exampleInputPassword1" required>
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="" class="form-label">Pengunjung</label>
                <input type="number" min="1" step="1" onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode<=57" pattern="[0-9]+" name="jumlah_pengunjung" class="form-control  @error('jumlah_pengunjung') is-invalid @enderror mb-2" id="exampleInputPassword1" required>
                @error('jumlah_pengunjung')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

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
    <img data-aos="zoom-in-up" src="/source/img/Top-layanan2.png" alt="">
</div>
@endsection
