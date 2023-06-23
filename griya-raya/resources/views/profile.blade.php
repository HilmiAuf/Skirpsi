@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div data-aos="fade-up" data-aos-duration="3000" class="container profile-user">
    <div class="row" style=" min-height:69.2vh;">
        <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
            <div class="row ">
                <img src="/source/img/Batas-layanan.png" alt="">
                <p class="fs-1 text-center">PROFIL ANDA</p>
                <div class="col-7 align-self-center ps-5">
                    <p class="fs-5">Nama</p>
                    <p class="fs-3 fw-bold">{{ auth()->user()->name }}</p>
                    <p class="fs-5">Email</p>
                    <p class="fs-3 fw-bold">{{ auth()->user()->email }}</p>
                </div>
                <div class="col-3" ">
                    <a href="/edit-profile"> <i class="fas fa-edit text-black">Edit</i></a>
                </div>
                <img src="/source/img/Batas-layanan2.png" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12  align-self-center">
            <div class="row ">
                <img src="/source/img/Batas-layanan.png" alt="">
                <p class="fs-1 text-center">GANTI PASSWORD</p>
                @if(session('success'))
                <div class="alert alert-success" role='alert'>
                    {{ session('success') }}
                </div>
                @endif
                <div class="col-9">
                    <form action="edit-password" method="POST">
                        @method('put')
                        @csrf
                        <label class="form-label" for="">Password Lama</label>
                        <input class="form-control @error('current_password') is-invalid @enderror" type="password" name="current_password"
                            placeholder="Password Lama">
                            @error('current_password')
                            <div class="invalid-feedback">
                                Password Tidak Cocok!
                            </div>
                            @enderror

                        <label for="">Password Baru</label>
                        <input class="form-control " type="password" name="password" placeholder="Password Baru">


                        <label for="">Konfirmasi Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                            name="password_confirmation" placeholder=" Konfirmasi Password ">
                        @error('password')
                        <div class="invalid-feedback">
                            Password Tidak Cocok!
                        </div>
                        @enderror

                </div>
                <div class="col-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
                </form>
                <img src="/source/img/Batas-layanan2.png" alt="">
            </div>
        </div>
    </div>
</div>


{{-- <div class="container">
    <div class="row justify-content-center" style="min-height: 53.6vh;">
        <div class="col-md-6 align-self-center">
            <div class="card">
                <div class="card-header  ">
                    <a href="/edit-profile"><button class="btn btn-update"> edit</button> </a>
                </div>
                <div class="card-body text-center">
                    <div class="form-group row">
                        <p class="fs-2">Nama</p>
                        <p>{{ auth()->user()->name }}</p>
</div>
<div class="form-group row">
    <p class="fs-2">Email</p>
    <p>{{ auth()->user()->email }}</p>
</div>
<div class="form-group row mb-0">
</div>
</div>
</div>
</div>
<div class="col-md-6 align-self-center">
    <div class="card">
        <form action="edit-password" method="POST">
            @method('put')
            @csrf
            <div class="card-header  ">
                <button style="float: right">Save</button>
            </div>
            <div class="card-body ">
                <div class="form-group row mb-2">
                    <p class="fs-2 text-center">Change Password</p>
                    <label for="">Last Password</label>
                    <input type="password" name="current_password" placeholder="Last Password ">
                </div>
                <div class="form-group row  mb-2">
                    <label for="">New Password</label>
                    <input type="password" name="password" placeholder="New Password ">
                </div>
                <div class="form-group row  mb-2">
                    <label for="">Confirmed Password</label>
                    <input type="password" name="password_confirmation" placeholder="Confirmed Password">
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div> --}}
@endsection
