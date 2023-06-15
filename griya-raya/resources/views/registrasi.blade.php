<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('source/css/login.css')}}">
    <title>Griya Raya</title>
</head>

<body>
    <div class="login container text-center">
        <div class="row justify-content-center align-items-center align-self-center " style="height:100vh;">
            <div class="col-lg-6 col-md-6 col-sm-6 align-items-center align-self-center">
                <img src="/source/img/Batas-layanan.png" alt="">
                <p class="text-black"><i class="fas fa-users fa-7x"></i></p>
                <a href="/" style="text-decoration: none;">
                    <span class="satu fs-2">Griya</span>
                    <span class="dua fs-2">Raya</span>
                </a>
                <form method="POST" action="/registrasi">
                    @csrf

                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control @error('fullname') is-invalid @enderror mb-2 "
                        id="name" name="name" value="{{ old('name') }}" placeholder="Nama">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror mb-2"
                        id="email" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror mb-2" id="password"
                        aria-describedby="passwordHelpBlock" required placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror
                    <label for="password_confirmation" class="form-label">Konfirmasi Password  </label>
                    <input type="password" id=""
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" aria-describedby="passwordHelpBlock"
                        placeholder="Konfirmasi Password" required>
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <button type="submit" class="btn mt-3 mb-3 "> SUBMIT </button>
                </form>
                <img src="/source/img/Batas-layanan2.png" alt="">
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
