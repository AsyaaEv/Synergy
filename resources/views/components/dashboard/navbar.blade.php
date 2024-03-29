<div class="w-full h-screen flex flex-col transition-all overflow-hidden">
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
    <div class="w-[15rem] h-screen bg-primaryD absolute -translate-x-[16rem] transition-all sm:translate-x-0 "
        id="nav">
        <div class="w-full h-auto flex justify-center items-center mt-2">
            <a class="navbar-brand d-flex align-items-center" href="#"> <img class="h-10"
                    src="{{ Storage::url('assets/pplg/img/pplg-logo.png') }}" alt="">
                <div class="flex flex-col h-full ml-3"><span
                        class="font-bold text-2xl text-[#f78704]">PPLG</span><span class="text-base">SMKN 1
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
    <div class="w-full h-full overflow-hidden bg-secD">
        @include('components.dashboard.content')
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
