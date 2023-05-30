@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')
<div class="container layanan-admin table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">1</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td><button class="btn">Admin</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
