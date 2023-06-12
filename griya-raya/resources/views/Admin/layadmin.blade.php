@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')

    <div class="container layanan-admin table-responsive">
        <div class="col" style="float:right">
            <a class="add-layanan" href="/add-layanan"><button class="btn">Tambah</button></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layanans as $layanan)
                <tr>

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $layanan->category}}</td>
                    <td>{{$layanan->judul}}</td>
                    <td>{{ $layanan->harga}}</td>
                    <td>
                        <form action="/deleteLayanan/{{ $layanan->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class=" btn delete" onclick="return confirm('are you sure?')"><span
                                    data-feather="x-circle">Hapus</span></button>
                        </form>
                        <a class="edit-data" href="/editLayanan/{{ $layanan->id }}"><button
                                class="btn btn-update">Edit</button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
