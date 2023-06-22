<nav class="navbar navbar-light bg-light "  >
    <div class="container-fluid">
        <a class="navbar-brand" href="/admin">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Admin</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link " href="/admin">Beranda Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/">Beranda User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/layanan-admin">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/testimoni-admin">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/book-admin"> Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user-admin"> Pengguna</a>
                    </li>
                    <li class="nav-item text-center">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger  btn-logout fs-6"><i class="bi bi-door-open"></i>Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
