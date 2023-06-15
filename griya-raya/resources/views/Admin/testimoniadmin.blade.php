@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')

<div class="container layanan-admin table-responsive">
    <table class="table">
        <thead>
            <tr col-12>
                <th scope="col-1">NO</th>
                <th scope="col-2">Nama</th>
                <th scope="col-7">Testimoni</th>
                <th scope="col-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonis as $testimoni)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$testimoni->name}}</td>
                <td>{{$testimoni->isi_testimoni}}</td>
                <td>
                    <form action="/deleteTestimoni/{{ $testimoni->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn delete" onclick="return confirm('are you sure?')"><span
                                data-feather="x-circle"><i class="fas fa-trash-alt"></i></span></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
