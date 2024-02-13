<div class="w-full h-screen flex flex-col transition-all overflow-hidden">
    @livewire('pplg.dashboard.guru-edit-bio', ['id' => intval($dataGuru->id)])
    <nav class="bg-primaryD md:pl-[15rem] border-b-[1px] border-white/30 sm:border-none">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center  sm:items-stretch sm:justify-start sm:invisible">
                    <div class="flex flex-shrink-0 items-center">
                        <i class="ph-fill ph-list text-black text-2xl hover:cursor-pointer transition-all"
                            onclick="toggleNav()" id="toggle"></i>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                    

                    <!-- Profile dropdown -->
                    <div class="relative ml-3 md:mr-8">
                        <div>
                            <button type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="w-[15rem] h-screen bg-primaryD absolute -translate-x-[16rem] transition-all sm:translate-x-0 z-50"
        id="nav">
        <div class="w-full h-auto flex justify-center items-center mt-2">
            <a class="navbar-brand d-flex align-items-center" href="#"> <img class="h-10"
                    src="{{ Storage::url('assets/pplg/img/pplg-logo.png') }}" alt="">
                <div class="flex flex-col h-full ml-3"><span class="font-bold text-2xl text-[#f78704]">PPLG</span><span
                        class="text-base text-white">SMKN 1
                        BANGSRI</span></div>
            </a>
        </div>
        <div class="w-8 h-8 absolute rounded-full ml-[15rem]" style="box-shadow: -20px -20px 0 #ffff"></div>
        <div class="w-full h-auto mt-4 container flex-col flex gap-2 ">
            <a href="/dashboard"
                class="w-full h-auto border-b-[1px] shadow-sm hover:border-[1px] border-black rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-primaryD decoration-transparent">
                <i class="ph-fill ph-layout text-black text-2xl"></i>
                <div class="text-black font-medium group-hover:translate-x-2 transition-all">Dashboard</div>
            </a>
            <a href="/dashboard/guru"
                class="w-full h-auto  hover:shadow-md rounded-[10px] border-black py-2 flex items-center container gap-2 group hover:cursor-pointer bg-primaryD decoration-transparent">
                <i class="ph-fill ph-student text-black text-2xl"></i>
                <div class="text-black font-medium group-hover:translate-x-2 transition-all">Guru Produktif</div>
            </a>
            <a href="/dashboard/kelas"
                class="w-full h-auto hover:shadow-md rounded-[10px] border-black py-2 flex items-center container gap-2 group hover:cursor-pointer bg-primaryD decoration-transparent">
                <i class="ph-fill ph-door text-black text-2xl"></i>
                <div class="text-black font-medium group-hover:translate-x-2 transition-all">Kelas PPLG</div>
            </a>
            <a href="/dashboard/walikelas"
                class="w-full h-auto hover:shadow-md rounded-[10px] border-black py-2 flex items-center container gap-2 group hover:cursor-pointer bg-primaryD decoration-transparent">
                <i class="ph-fill ph-users text-black text-2xl"></i>
                <div class="text-black font-medium group-hover:translate-x-2 transition-all">Wali Kelas</div>
            </a>
        </div>
    </div>
    <div class="w-full h-full bg-secD">
        <div class="w-full h-screen mt-2 px-2 sm:px-0 transition-all">
            <div class="w-full h-full rounded-[10px] sm:pl-[15rem] overflow-auto pb-[5rem]">
                <div class="w-full bg-primaryD h-auto rounded-[10px] container pb-4">
                    <div class="px-2  py-3 rounded-[10px] flex justify-between items-center absolute transition-all z-50 @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif"
                        id="alert">
                        <div id="alert-border-1"
                            class="flex items-center rounded-[10px] p-4 mb-4 @if (!empty(session('alert'))) text-{{ session('alert') }} border-t-4 border-{{ session('alert') }} bg-blue-50 @endif"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                @if (!empty(session('alert')))
                                    {{ session('msg') }}
                                @endif
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-border-1" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full h-auto flex gap-2 pt-2 ">
                        <a href="{{ url('/dashboard/guru') }}"
                            class="w-auto h-auto flex justify-center items-center decoration-transparent text-black">
                            <i class="ph-bold ph-arrow-bend-up-left text-xl  p-2 bg-secD rounded-full"></i>
                        </a>
                        <div class="w-auto h-auto">
                            <div class="font-bold text-xl text-black">Detail Guru</div>
                            <div class="font-normal text-md text-black opacity-50">Detail Guru PPLG
                            </div>
                        </div>
                    </div>
                    <hr class="h-[1px] text-black my-2">
                    <img src="{{ Storage::url('banner.webp') }}" alt=" "
                        class="w-full h-[15rem] object-cover rounded-[10px] hidden md:block">
                    <div class="w-full h-auto flex flex-col lg:flex-row gap-2 lg:items-center lg:justify-center">
                        <div
                            class="w-full lg:w-[40%] h-auto my-auto bg-secD rounded-[10px] mt-4 pb-3 flex justify-center items-center flex-col">
                            <div class="w-full h-auto mt-2 mb-4 container flex gap-2 items-center">
                                <i class="ph-fill ph-user-rectangle text-3xl"></i>
                                <div class="font-medium text-lg">Foto Profile</div>
                            </div>
                            <img src="{{ Storage::url($dataGuru->foto) }}" alt=""
                                class="w-[90%] h-[15rem] rounded-[10px] object-cover">
                            <div class="w-full h-auto  mt-3 container flex justify-center items-center flex-col">
                                <div class="text-sm text-center">Klik dibawah ini untuk mengganti foto profile <i
                                        class="ph-bold ph-arrow-down"></i></div>
                                <input type="file" class="rounded-[10px] border-[1px] container">
                            </div>
                            <div
                                class="w-full h-auto justify-center items-center mt-4 hidden lg:block lg:justify-center mx-auto container">
                                <button
                                    class="select-none rounded-lg bg-gradient-to-tr from-red-900 to-red-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none items-center flex gap-2 group"
                                    data-ripple-light="true" data-dialog-target="animated-dialog">
                                    Hapus guru <i
                                        class="ph-fill ph-trash text-lg group-hover:translate-x-2 transition-all"></i>
                                </button>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">

                            <div class="w-full h-auto py-2 bg-secD rounded-[10px] mt-3 container">
                                <div class="w-full h-auto mb-4 flex items-center justify-between pt-1">
                                    <div class="w-full h-auto flex items-center gap-2">
                                        <i class="ph-fill ph-article text-3xl"></i>
                                        <div class="font-medium text-lg">Deskripsi Guru</div>
                                    </div>
                                    <div class="w-full h-auto flex items-center gap-2 justify-end">
                                        <a href="" class="text-black decoration-transparent">
                                            <i class="ph-fill ph-plus bg-primaryD rounded-[10px] p-1 text-3xl "></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full h-auto justify-center items-center flex pb-4 flex-col">
                                    @if (!$dataGuru->deskripsi)
                                        <div class="font-medium">Deskripsi Guru Tidak Ada</div>
                                        <div class="font-medium text-sm opacity-70">Klik Icon + Untuk Menambahkan
                                            Deskripsi
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="w-full h-auto py-2 bg-secD rounded-[10px] mt-3 container">
                                <div class="w-full h-auto mb-2 flex items-center justify-between pt-1">
                                    <div class="w-full h-auto flex items-center gap-2">
                                        <i class="ph-fill ph-user-list text-3xl"></i>
                                        <div class="font-medium text-lg">Bio Data</div>
                                    </div>
                                    <div class="w-full h-auto flex items-center gap-2 justify-end">
                                        <i class="ph-fill ph-user-gear bg-primaryD rounded-[10px] p-1 text-3xl hover:cursor-pointer" data-dialog-target="dialog"></i>
                                    </div>
                                </div>

                                <div class="w-full h-auto flex flex-col gap-2">
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-user-circle text-2xl"></i>
                                        <div class="font-medium ">Nama : <strong>{{ $dataGuru->nama }}</strong></div>
                                    </div>
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-user text-2xl"></i>
                                        <div class="font-medium ">Nama Panggilan :
                                            <strong>{{ $dataGuru->nama_panggilan }}</strong>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-stack text-2xl"></i>
                                        <div class="font-medium ">Jabatan :
                                            <strong>{{ $dataGuru->jabatan }}</strong>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-calendar text-2xl"></i>
                                        <div class="font-medium ">TTL :
                                            <strong>{{ $dataGuru->ttl }}</strong>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-book-bookmark text-2xl"></i>
                                        <div class="font-medium ">Mapel :
                                            <strong>{{ $dataGuru->mapel }}</strong>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-barcode text-2xl"></i>
                                        <div class="font-medium ">Kode Guru :
                                            <strong>{{ $dataGuru->kode }}</strong>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-identification-badge text-2xl"></i>
                                        <div class="font-medium ">NIP :
                                            <strong>{{ $dataGuru->nip }}</strong>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto  flex gap-2 items-center">
                                        <i class="ph-fill ph-envelope text-2xl"></i>
                                        <div class="font-medium ">Email :
                                            <strong>{{ $dataGuru->email }}</strong>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="w-full h-auto mt-2">
                                    <div class="w-full h-auto mb-2 flex items-center justify-between pt-1">
                                        <div class="w-full h-auto flex items-center gap-2">
                                            <i class="ph-fill ph-globe text-3xl"></i>
                                            <div class="font-medium text-lg">Sosial Media</div>
                                        </div>
                                        <div class="w-full h-auto flex items-center gap-2 justify-end">
                                            <a href="" class="text-black decoration-transparent">
                                                <i
                                                    class="ph-fill ph-plus bg-primaryD rounded-[10px] p-1 text-3xl "></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="w-full h-auto justify-center items-center flex pb-4 flex-col">
                                        @if (!$dataGuru->ig || !$dataGuru->fb)
                                            <div class="font-medium">Sosial Media Tidak Ada</div>
                                            <div class="font-medium text-sm opacity-70">Klik Icon + Untuk Menambahkan
                                                Sosial Media</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-auto py-2 bg-secD rounded-[10px] mt-3 container">
                                <div class="w-full h-auto mb-4 flex items-center justify-between pt-1">
                                    <div class="w-full h-auto flex items-center gap-2">
                                        <i class="ph-fill ph-graduation-cap text-3xl"></i>
                                        <div class="font-medium text-lg">Pendidikan</div>
                                    </div>
                                    <div class="w-full h-auto flex items-center gap-2 justify-end">
                                        <a href="" class="text-black decoration-transparent">
                                            <i class="ph-fill ph-plus bg-primaryD rounded-[10px] p-1 text-3xl "></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full h-auto justify-center items-center flex pb-4 flex-col">
                                    @if (!$dataGuru->pendidikan)
                                        <div class="font-medium">Pendidikan Guru Tidak Ada</div>
                                        <div class="font-medium text-sm opacity-70">Klik Icon + Untuk Menambahkan
                                            Pendidikan</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-auto flex justify-center items-center mt-4 lg:hidden">
                            <button
                                class="select-none rounded-lg bg-gradient-to-tr from-red-900 to-red-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none items-center flex gap-2 group"
                                data-ripple-light="true" data-dialog-target="animated-dialog">
                                Hapus guru <i
                                    class="ph-fill ph-trash text-lg group-hover:translate-x-2 transition-all"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- dialog --}}
    <div data-dialog-backdrop="animated-dialog"
        class="pointer-events-none px-8 md:px-[10rem] lg:px-[20rem] xl:px-[30rem] fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black/30 bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="animated-dialog"
            data-dialog-mount="opacity-100 translate-y-0 scale-100"
            data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
            data-dialog-transition="transition-all duration-300"
            class="relative m-4 w-full rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
            <div
                class="flex items-center p-4 font-sans text-xl antialiased font-semibold leading-snug shrink-0 text-blue-gray-900">
                Hapus Guru PPLG
            </div>
            <div
                class="relative p-4 font-sans text-base antialiased font-light leading-relaxed border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 text-blue-gray-500">
                Apakah Anda Yakin Untuk Menghapus Guru <div class="font-bold">({{ $dataGuru->nama }})</.>
                </div>
                <div
                    class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
                    <button data-ripple-dark="true" data-dialog-close="true"
                        class="px-6 py-3 mr-1 font-sans text-xs font-bold text-green-500 uppercase transition-all rounded-lg middle none center hover:bg-green-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Batal
                    </button>
                    <button data-ripple-light="true" data-dialog-close="true"
                        wire:click='hapusGuru({{ $dataGuru->id }})'
                        class="middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        let toggleN = false;
        const nav = document.getElementById('nav')
        const toggle = document.getElementById('toggle')

        function toggleNav() {
            if (toggleN == false) {
                console.log('a');
                nav.classList.remove('-translate-x-[16rem]')
                toggle.classList.add('translate-x-[15rem]')
                toggleN = true;
            } else {
                console.log('aa');
                nav.classList.add('-translate-x-[16rem]')
                toggle.classList.remove('translate-x-[15rem]')
                toggleN = false;
            }
        }
    </script>
