<nav class="navbar nav-respon navbar-expand-lg fixed-top py-4">
    <div class="container container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#"> <img class="h-14" src="{{Storage::url('assets/pplg/img/pplg-logo.png')}}" alt="">
            <div class="flex flex-col h-full ml-3"><span class="font-bold text-2xl text-[#f78704]">PPLG</span><span class="text-base text-white">SMKN 1 BANGSRI</span></div>
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">PPLG</h5>
                <button type="button" class="btn-close focus:outline-none shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-lg font-semibold">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 text-white" aria-current="page" href="{{"/"}}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{"#about"}}">Tentang</a></li>
                            <li><a class="dropdown-item" href="{{""}}">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Program Kerja</a></li>
                            <li><a class="dropdown-item" href="#">Sarana Prasarana</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 text-white" href="">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 text-white" aria-current="page" href="">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
        <button class="navbar-toggler border-0 focus:outline-none shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
