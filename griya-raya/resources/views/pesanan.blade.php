@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container text-center pesanan">
    <img data-aos="zoom-in-up" src="/source/img/Top-layanan1.png" alt="" style="widht:100% ">
    <div data-aos="fade-up" data-aos-duration="3000" class="row" style=" min-height:53.5vh;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-self-center table-responsive">
            @if($bookings->isEmpty())
            <h3 class="text-center">Belum Ada Pesanan ^-^</h3>
            @else
            <table class="table ">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">No</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pengunjung</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$booking->category}}</td>
                        <td>{{$booking->judul}}</td>
                        <td>Rp {{moneyFormat($booking->harga)}}</td>
                        <td>{{$booking->alamat}}</td>
                        <td>{{moneyFormat($booking->jumlah_pengunjung)}}</td>
                        <td>
                            <form action="/deleteBooking/{{ $booking->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="delete" onclick="return confirm('Apakah Kamu Yakin?')"><i
                                        class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    <img data-aos="zoom-in-up" src="/source/img/Top-layanan2.png" alt="">
</div>

@endsection
