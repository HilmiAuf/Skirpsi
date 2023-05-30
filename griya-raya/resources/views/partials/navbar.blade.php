
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid  ms-5">
        <a href="/" style="text-decoration: none;"> 
            <span class="satu fs-2">Griya</span> 
            <span class="dua fs-2">Raya</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link fs-6 me-4" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-6 me-4" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-6 me-4" href="/testimoni">Testimony</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-6 me-4" href="/pesanan">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-6 me-4" href="/kontak">Contact</a>
            </li>

            @auth
            @if (Auth::user()->utype == 'ADM')
            <li class="nav-item">
                <a class="nav-link fs-6 me-4" href="/admin">Admin</a>
            </li>
            @endif
            @endauth
            <li class="nav-item dropdown">
                <a class="nav-link fs-6 me-4 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu dropdown-menu-center">
                <li><a class="dropdown-item" href="/pernikahan">Wedding</a></li>
                <li><a class="dropdown-item" href="/akadpernikahan">Marriage Contract</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-6 me-4" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
                @auth
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn-logout fs-6"><i class="bi bi-door-open"></i>Logout</button>
                </form>
                @else
                <a class="nav-link fs-6 " href="/login">Login</a>
                @endauth
            </li>
            </ul>
        </div>
    </div>
</nav>
