<nav class="navbar nav-respon navbar-expand-lg fixed-top py-1 transition ease-in-out {{Request::segment(1) == '' ? '' : 'shadow-md'}}">
    <div class="container container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{"/"}}profil"> <img class="h-11" src="{{Storage::url('assets/pplg/img/pplg-logo.png')}}" alt="">
            <div class="flex flex-col h-full ml-3 nav-con text-slate-950"><span class="font-bold text-2xl text-[#f78704]">PPLG</span><span class="text-sm ">SMKN 1 BANGSRI</span></div>
        </a>
        <div class="offcanvas offcanvas-start bg-black" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a href="" class="offcanvas-title d-flex align-items-center no-underline" id="offcanvasNavbarLabel"> <img class="h-11" src="{{Storage::url('assets/pplg/img/pplg-logo.png')}}" alt="">
                    <div class="flex flex-col h-full ml-3 nav-con text-slate-50 lg:text-slate-950"><span class="font-bold text-2xl text-[#f78704]">PPLG</span><span class="text-sm lg:text-hitam text-gray-100">SMKN 1 BANGSRI</span></div>
                </a>
                <button type="button" class="focus:outline-none shadow-none ph ph-x text-3xl text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto flex gap-3 justify-content-end flex-grow-1 pe-3 text-base font-semibold">
                    <li class="nav-item">
                        <a class="nav-con navl no-underline block lg:text-hitam text-gray-100" aria-current="page" href="{{"/"}}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-con no-underline lg:text-hitam text-gray-100 block dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu bg-black border-[1.5px] border-white">
                            <li><a class="dropdown-item navl text-white" href="{{"/#about"}}">Tentang</a></li>
                            <li><a class="dropdown-item navl text-white" href="{{"/#visiMisi"}}">Visi Misi</a></li>
                            <li><a class="dropdown-item navl text-white" href="{{"/#sejarah"}}">Sejarah</a></li>
                            <li><a class="dropdown-item navl text-white" href="{{"/#sarana"}}">Sarana Prasarana</a></li>
                            <li><a class="dropdown-item navl text-white" href="{{"/#progamKerja"}}">Program Kerja</a></li>
                            <li><a class="dropdown-item navl text-white" href="{{"/#struktur"}}">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-con navl no-underline lg:text-hitam text-gray-100 block mx-lg-2 " href="{{"/#kelas"}}">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-con navl no-underline lg:text-hitam text-gray-100 block mx-lg-2 " aria-current="page" href="{{"/#footer"}}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
        <button class="navbar-toggler border-0 focus:outline-none shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="ph ph-list text-3xl nav-con"></span>
        </button>        
    </div>
</nav>



<style>
    .dropdown-menu>li>a:hover {
        background-image: none;
        background-color: #f78704;
    }

</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.querySelector("nav");
        const links = document.querySelectorAll(".navl");
        const navi = document.querySelectorAll(".nav-con")
        const offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasNavbar'));

        // Tambahkan event listener ke setiap link
        links.forEach(link => {
            link.addEventListener('click', () => {
                // Tutup offcanvas saat link diklik
                offcanvas.hide();
            });
        });

        window.addEventListener("scroll", () => {
            if (window.scrollY > 15) {
                navbar.classList.add('bg-black');
                navbar.classList.add('border-b-2');
                navbar.classList.add('border-[#f78704]');
                navi.forEach(link => {
                    link.classList.remove("text-slate-950");
                    link.classList.add("text-white");
                });
            } else if (window.scrollY <= 50) {
                navbar.classList.remove('bg-black');
                navbar.classList.remove('border-b-2');
                navi.forEach(link => {
                    link.classList.remove("text-white");
                });
            }
        });
    });

</script>
