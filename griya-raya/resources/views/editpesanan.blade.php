@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container">
    <div class="col" style="float:right">
            <button>Edit</button>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Layanan</th>
      <th scope="col">Harga</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jumlah Pengunjung</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>adada</td>
      <td>daada</td>
      <td><button>hapus</button> <button>edit</button></td>
    </tr>
  </tbody>
</table>
</div>

@endsection
