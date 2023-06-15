@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')
<div class="addlayanan " style="padding:50px; padding-top:0;pdding-bottom:0;">
    <div class="row justify-content-center justify-content-center ">
        <div class="col-lg-8 col-xs-8 col-sm-8 col-md-8 addadmin ">
            <div class="pull-left text-center">
                <p class="fs-1"> Tambah Layanan </p>
            </div>
            <div class="pull-right">
                <a class="" href="/layanan-admin"><button class=" btn btn-primary">Kembali</button></a>
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
    <form action="/add-layanan" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <strong>Layanan :</strong>
                    <select name="category" id=""
                        style=" margin-top: 10px; width: 100% ;  border-radius:5px;  height: 38px; padding-left:9px; border-color:#C4C4C4; color:#6c757d;">
                        @foreach ($categories as $category)
                        @if (old('category') == $category->id)
                        <option value="{{ $category->name }}" selected>{{ $category->name }}
                        </option>
                        @else
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Layanan">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input type="number" name="harga" class="form-control" placeholder="Harga">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="isi_paket" id="isi_paket"
                        placeholder="Isi Paket "></textarea>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <input type="file" name="foto" class="form-control" placeholder="foto">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <strong>Ringkasan:</strong>
                    <input type="text" name="ringkasan" class="form-control" placeholder="Ringkasan">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center submit mt-4">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection
