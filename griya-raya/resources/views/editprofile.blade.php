@extends('layout.main')
@section('container')

<div class="container">
    <div class="row justify-content-center"  style="min-height: 53.6vh;">
        <div class="col-md-8 align-items-center align-self-center">
            <div class="card">
                <div class="card-header">{{ __('Edit Profil') }}</div>
                <div class="card-body">
                    <form method="POST" action="/edit-profile" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control mb-2" name="name" value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="{{ auth()->user()->email }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary mt-2"> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
