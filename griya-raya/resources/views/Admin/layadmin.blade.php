@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')

    <div class=" col-8 container layanan-admin table-responsive">
        <div class="col" style="float:right">
            <a class="add-layanan" href="/add-layanan"><button class="btn">Tambah</button></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-1">No</th>
                    <th scope="col-2">Layanan</th>
                    <th scope="col-1">Paket</th>
                    <th scope="col-3">Harga</th>
                    <th scope="col-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layanans as $layanan)
                <tr>

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $layanan->category}}</td>
                    <td>{{$layanan->judul}}</td>
                    <td>Rp {{moneyFormat($layanan->harga)}}</td>
                    <td>
                        <form action="/deleteLayanan/{{ $layanan->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class=" btn delete" onclick="return confirm('Apakah Kamu Yakin?')"><span
                                    data-feather="x-circle"><i class="fas fa-trash-alt"></i></span></button>
                        </form>
                        <a class="edit-data" href="/editLayanan/{{ $layanan->id }}"><button
                                class="btn btn-update"><i class="fas fa-edit text-black"></i></button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
