<nav class="navbar navbar-dark nav-respon navbar-expand-lg fixed-top py-1 transition ease-in-out">
    <div class="container container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#"> <img class="h-11" src="{{Storage::url('assets/pplg/img/pplg-logo.png')}}" alt="">
            <div class="flex flex-col h-full ml-3"><span class="font-bold text-2xl text-[#f78704]">PPLG</span><span class="text-sm text-white">SMKN 1 BANGSRI</span></div>
        </a>
        <div class="offcanvas offcanvas-start bg-black" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a href="" class="offcanvas-title d-flex align-items-center no-underline" id="offcanvasNavbarLabel"> <img class="h-11" src="{{Storage::url('assets/pplg/img/pplg-logo.png')}}" alt="">
                    <div class="flex flex-col h-full ml-3"><span class="font-bold text-2xl text-[#f78704]">PPLG</span><span class="text-sm text-white">SMKN 1 BANGSRI</span></div>
                </a>
                <button type="button" class="bg-white text-white btn-close focus:outline-none shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-base font-semibold">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 text-white" aria-current="page" href="{{"/"}}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu bg-black border-[1.5px] border-white">
                            <li><a class="dropdown-item text-white" href="{{"#about"}}">Tentang</a></li>
                            <li><a class="dropdown-item text-white" href="{{""}}">Visi Misi</a></li>
                            <li><a class="dropdown-item text-white" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item text-white" href="#">Program Kerja</a></li>
                            <li><a class="dropdown-item text-white" href="#">Sarana Prasarana</a></li>
                            <li><a class="dropdown-item text-white" href="#">Struktur Organisasi</a></li>
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
        <button class="navbar-toggler border-0 focus:outline-none shadow-none text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<style>
    .dropdown-menu>li>a:hover {
        background-image: none;
        background-color: #f78704;
    }
    }

</style>

<script>
    const navbar = document.querySelector("nav");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 15) {
            navbar.classList.add('bg-black')
            navbar.classList.add('bg-black')
            navbar.classList.add('border-b-2')
            navbar.classList.add('border-[#f78704]')

        } else if (window.scrollY <= 50) {
            navbar.classList.remove('bg-black')
            navbar.classList.remove('border-b-2')
        }
    });

</script>
