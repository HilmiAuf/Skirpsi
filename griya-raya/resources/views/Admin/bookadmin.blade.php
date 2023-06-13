@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')

<div class="container layanan-admin table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Layanan</th>
                <th scope="col">Paket</th>
                <th scope="col">Harga</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jumlah Pengunjung</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>



                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$booking->author->name}}</td>
                <td>{{$booking->category}}</td>
                <td>{{$booking->judul}}</td>
                <td>Rp {{moneyFormat($booking->harga)}}</td>
                <td>{{$booking->telepon}}</td>
                <td>{{$booking->alamat}}</td>
                <td>{{moneyFormat($booking->jumlah_pengunjung)}}</td>
                <td>
                    <form action="/deleteBooking/{{ $booking->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn delete" onclick="return confirm('are you sure?')"><span
                                data-feather="x-circle">Hapus</span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
