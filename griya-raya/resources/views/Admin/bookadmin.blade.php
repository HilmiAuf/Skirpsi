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
                <th scope="col">Status</th>
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
                    <form action="/book-admin/update" method="POST">
                        @csrf
                            {{ method_field('PUT') }}
                        <input type="hidden" name="id" value="{{$booking->id}}">
                        <select name="status" id="status" onchange="this.form.submit()">
                            <option value="DIPROSES" <?php if($booking->status == 'DIPROSES'){ echo 'selected'; }; ?>>DIPROSES</option>
                            <option value="DITERIMA" <?php if($booking->status == 'DITERIMA'){ echo 'selected'; }; ?>>DITERIMA</option>
                            <option value="DITOLAK" <?php if($booking->status == 'DITOLAK'){ echo 'selected'; }; ?>>DITOLAK</option>
                            <option value="SELESAI" <?php if($booking->status == 'SELESAI'){ echo 'selected'; }; ?>>SELESAI</option>
                        </select>
                    </form>
                </td>
                <td>
                    <form action="/deleteBooking/{{ $booking->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn delete" onclick="return confirm('Apakah Kamu Yakin?')"><span
                                data-feather="x-circle"><i class="fas fa-trash-alt"></i></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
