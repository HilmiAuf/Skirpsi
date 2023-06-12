@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
{{-- <div style="padding:50px; padding-top:0;pdding-bottom:0; min-height:69.2vh;">
    <div class="row">
        <div class="col-lg-12 margin-tb addadmin">
            <div class="pull-left">
                <h2>Add New Artikel</h2>
            </div>
            <div class="pull-right">
                <a class="backadmin" href="/admin/artikel"><button>Back</button></a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/add-testimoni" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="name" value=" {{ auth()->user()->name }}">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama:</strong>
                    <p>{{ auth()->user()->name }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <input type="file" name="foto" class="form-control" placeholder="foto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Testimoni:</strong>
                    <input type="text" name="isi_testimoni" class="form-control" placeholder="Nama Author">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center submit">
                <button type="submit">Submit</button>
            </div>
        </div>

    </form>
</div> --}}
<div class="container  testimoni-user">
    @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    <div class="row align-items-start justify-content-center">
        <div class="col-6">
            <img src="/source/img/Batas-layanan.png" alt="">
            <div class="pull-left">
                <p class="fs-1 top text-center">Testimoni</p >
                    <p class="fs-6 text-center" style="font-weight: normal;">Berikan pengalaman Anda menggunakan jasa wedding organizer Griya Raya di bawah ini!</p>
            </div>
            <div class="pull-right">
                <a class="backadmin" href="/testimoni"><button class="btn">Kembali</button></a>
            </div>
            <form action="/add-testimoni" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="name" value=" {{ auth()->user()->name }}">
                <p class="fs-3">Nama: {{ auth()->user()->name }}</p>
                <p class="fs-3">Poto:</p>
                <input type="file" name="foto" class="form-control" placeholder="foto">
                <p class="fs-3">Testimoi:</p>
                    <input type="text" name="isi_testimoni" class="form-control" placeholder="Kesan">
                <button class="btn mt-3" type="submit">Kirim</button>
            </form>
            <img src="/source/img/Batas-layanan2.png" alt="">
        </div>
    </div>
</div>
</div>
@endsection
