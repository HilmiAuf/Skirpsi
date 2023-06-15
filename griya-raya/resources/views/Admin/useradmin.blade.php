@extends('layout.second') {{-- ini memanggil file main yang di dalam layout --}}
@section('container-admin')
<div class="container layanan-admin table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>
                    @if ($user->utype == "USR")

                    <form action="/user-admin/{{$user->id}}" method="POST">
                        @csrf
                        @method('put')

                    <button type="submit" class="btn btn-success btn-brand ">Tambah Admin</button>
                    </form>

                    @else

                    <form action="/user-admin/{{$user->id}}" method="POST">
                        @csrf
                        @method('put')

                    <button type="submit" class="btn btn-danger btn-brand">Tambah user</button>
                </form>

                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
