<div class="w-full h-screen flex flex-col transition-all overflow-hidden">
    <nav class="bg-[#0C0C1E] md:pl-[15rem] border-b-[1px] border-white/30 sm:border-none">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center  sm:items-stretch sm:justify-start sm:invisible">
                    <div class="flex flex-shrink-0 items-center">
                        <i class="ph-fill ph-list text-white text-2xl hover:cursor-pointer transition-all"
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
    <div class="w-[15rem] h-screen bg-[#0C0C1E] absolute -translate-x-[16rem] transition-all sm:translate-x-0 "
        id="nav">
        <div class="w-full h-auto flex justify-center items-center mt-2">
            <a class="navbar-brand d-flex align-items-center" href="#"> <img class="h-10"
                    src="{{ Storage::url('assets/pplg/img/pplg-logo.png') }}" alt="">
                <div class="flex flex-col h-full ml-3"><span
                        class="font-bold text-2xl text-[#f78704]">PPLG</span><span class="text-base text-white">SMKN 1
                        BANGSRI</span></div>
            </a>
        </div>
        <div class="w-8 h-8 absolute rounded-full ml-[15rem]" style="box-shadow: -20px -20px 0 #0C0C1E"></div>
        <div class="w-full h-auto mt-4 container flex-col flex gap-2 ">
            <a href="/dashboard"
                class="w-full h-auto  shadow-md hover:border-b-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-layout text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Dashboard</div>
            </a>
            <a href="/dashboard/guru"
                class="w-full h-auto  shadow-md hover:border-b-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-student text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Guru Produktif</div>
            </a>
            <a href="/dashboard/kelas"
                class="w-full h-auto border-b-[1px] shadow-md hover:border-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-door text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Kelas PPLG</div>
            </a>
            <a href="/dashboard/walikelas"
                class="w-full h-auto shadow-md hover:border-b-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-users text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Wali Kelas</div>
            </a>
        </div>
    </div>
    <div class="w-full h-full overflow-hidden bg-secD">
        <div class="w-full h-screen mt-2 px-2 sm:px-0 transition-all">
            <div class="w-full h-full rounded-[10px] sm:pl-[15rem] flex flex-col gap-2 overflow-auto pb-[5rem]">
                <div class="w-full h-auto flex">
                    <div class="w-full h-auto">
                        <div class="text-xl text-white font-bold">Dashboard</div>
                        <div class="text-white/50">Kelas PPLG</div>
                    </div>
                    <div class="px-2  py-3 rounded-[10px] flex justify-between items-center absolute transition-all z-50 @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif" id="alert">
                        <div id="alert-border-1" class="flex items-center rounded-[10px] p-4 mb-4 @if (!empty(session('alert'))) text-{{ session('alert') }} border-t-4 border-{{ session('alert') }} bg-blue-50 @endif" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                @if (!empty(session('alert')))
                                {{ session('msg') }}
                            @endif
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close">
                              <span class="sr-only">Dismiss</span>
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                            </button>
                        </div>
                    </div>
                    <a href="/dashboard/kelas/add"
                        class="w-[2rem] lg:w-auto h-8 px-2 py-2 bg-white rounded-[10px] flex justify-center items-center decoration-transparent">
                        <i class="ph-fill ph-plus-circle text-secD text-2xl"></i>
                    </a>
                </div>
                <div class="w-full h-auto gap-2 flex flex-col md:grid md:grid-cols-2 lg:grid-cols-3 justify-center items-center mt-2 ">
                    @foreach ($data as $item)
                    <div class="w-[60%] md:w-full h-[20rem] bg-primaryD rounded-[10px] flex gap-2 shadow-md flex-col">
                        <div class="w-full h-[10rem]">
                            <img src="{{Storage::url($item->cover)}}" alt="" class="object-cover w-full h-full rounded-t-[10px]">
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <div class="w-full h-auto flex container items-center justify-between">
                                <div class="w-auto h-auto  flex gap-2 items-center">
                                    <i class="ph-fill ph-door text-xl text-white"></i>
                                    <div class="text-lg text-white">Kelas : </div>
                                </div>
                                <div class="w-auto h-auto ">
                                    <div class="font-bold text-xl text-white">{{$item->nama}}</div>
                                </div>
                            </div>
                            <div class="w-full h-auto flex container items-center justify-between">
                                <div class="w-auto h-auto  flex gap-2 items-center">
                                    <i class="ph-fill ph-calendar text-xl text-white"></i>
                                    <div class="text-lg text-white">Angkatan : </div>
                                </div>
                                <div class="w-auto h-auto">
                                    <div class="font-bold text-xl text-white">{{$item->angkatan}}</div>
                                </div>
                            </div>
                            <div class="w-full h-auto flex container items-center justify-between">
                                <div class="w-auto h-auto  flex gap-2 items-center">
                                    <i class="ph-fill ph-users text-xl text-white"></i>
                                    <div class="text-lg text-white">Walikelas : </div>
                                </div>
                                <div class="w-auto h-auto">
                                    <div class="font-bold text-xl text-white">{{$item->wali->nama_panggilan}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-auto flex justify-center items-center gap-2">
                            <a href="" class="p-2 bg-blue-300 rounded-[10px] decoration-transparent flex justify-center items-center"><i class="ph-fill ph-pencil text-xl"></i></a>
                            <div class="p-2 bg-green-300 rounded-[10px] flex justify-center items-center">
                                <i class="ph-fill ph-eye text-xl text-green-500"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
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
            nav.classList.remove('-translate-x-[16rem]')
            toggle.classList.add('translate-x-[15rem]')
            toggleN = true;
        } else {
            nav.classList.add('-translate-x-[16rem]')
            toggle.classList.remove('translate-x-[15rem]')
            toggleN = false;
        }
    }
</script>
