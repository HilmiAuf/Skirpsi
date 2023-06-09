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
    <title>Hello, world!</title>
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
                @if (Session::has('loginError'))
                <div class="alert alert-danger mt-3" role="alert">{{ Session::get('loginError') }}</div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <label for="email" class="form-label mb-3">Email</label>
                    <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email"
                        id="username" placeholder="Masukan email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="exampleInputPassword1" class="form-label mb-3">Password</label>
                    <input type="password" id="inputPassword5" name="password"
                        class="form-control mb-3 @error('password') is-invalid @enderror"
                        placeholder="Masukan password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <button type="submit" class="btn mb-3">SUBMIT</button>
                    <p>
                        Belum punya akun? <a href="/registrasi"> DAFTAR DISINI </a>
                    </p>
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
