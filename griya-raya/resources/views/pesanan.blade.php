@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container text-center pesanan" >
    <img src="/source/img/Top-layanan1.png" alt="" style="widht:100% "> 
    <div class="row" style=" min-height:53.5vh;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-self-center table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Harga</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Pengunjung</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$booking->category}}</td>
                        <td>{{$booking->judul}}</td>
                        <td>{{$booking->harga}}</td>
                        <td>{{$booking->alamat}}</td>
                        <td>{{$booking->jumlah_pengunjung}}</td>
                        <td>
                            <form action="/deleteBooking/{{ $booking->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="delete" onclick="return confirm('are you sure?')"><span
                                        data-feather="x-circle">Delete</span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <img src="/source/img/Top-layanan2.png" alt="">
</div>
@endsection
