@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')
<div style="padding:50px; padding-top:0;pdding-bottom:0;">
    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb addadmin">
            <div class="pull-left">
                <h2>Edit Layanan</h2>
            </div>
            <div class="pull-right">
                <a class="backadmin" href="/layanan-admin"><button class="btn btn-primary">Back</button></a>
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
    <form action="/editLayanan/{{$layanan->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="form-group">
                    <strong>Category :</strong>
                    <select name="category" id=""
                        style=" margin-top: 10px; width: 100% ;  border-radius:5px;  height: 38px; padding-left:9px; border-color:#C4C4C4; color:#6c757d;">
                        {{-- <option value="" selected disabled hidden>Choose here</option>
                        <option value="Edukasi">Edukasi</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Otomotif">Otomotif</option>
                        <option value="Sport">Sport</option>
                        <option value="Teknologi">Teknologi</option> --}}
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Artikel"
                        value="{{$layanan->judul}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="form-group">
                    <strong>harga:</strong>
                    <input type="number" name="harga" class="form-control" placeholder="Nama Author"
                        value="{{$layanan->harga}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="isi_paket" id="isi_paket"
                        placeholder="Penjelasan Artikel">value="{{$layanan->isi_paket}}"</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <input type="file" name="foto" class="form-control" placeholder="foto" value="{{$layanan->foto}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="form-group">
                    <strong>Ringkasan:</strong>
                    <input type="text" name="ringkasan" class="form-control" placeholder="Ringkasan"
                        value="{{$layanan->ringkasan}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-center submit">
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
