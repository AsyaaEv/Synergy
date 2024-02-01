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
    <div class="w-[15rem] h-screen bg-[#0C0C1E] absolute -translate-x-[16rem] transition-all sm:translate-x-0 z-50"
        id="nav">
        <div class="w-full h-auto flex justify-center items-center mt-2">
            <a class="navbar-brand d-flex align-items-center" href="#"> <img class="h-10"
                    src="{{ Storage::url('assets/pplg/img/pplg-logo.png') }}" alt="">
                <div class="flex flex-col h-full ml-3"><span class="font-bold text-2xl text-[#f78704]">PPLG</span><span
                        class="text-base text-white">SMKN 1
                        BANGSRI</span></div>
            </a>
        </div>
        <div class="w-8 h-8 absolute rounded-full ml-[15rem]" style="box-shadow: -20px -20px 0 #0C0C1E"></div>
        <div class="w-full h-auto mt-4 container flex-col flex gap-2 ">
            <a href="/dashboard"
                class="w-full h-auto  shadow-md hover:border-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-layout text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Dashboard</div>
            </a>
            <a href="/dashboard/guru"
                class="w-full h-auto shadow-md border-b-[1px] hover:border-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-student text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Guru Produktif</div>
            </a>
            <a href="/dashboard/kelas"
                class="w-full h-auto  shadow-md hover:border-b-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-door text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Kelas PPLG</div>
            </a>
            <a href="/dashboard/walikelas"
                class="w-full h-auto  shadow-md hover:border-b-[1px] rounded-[10px] py-2 flex items-center container gap-2 group hover:cursor-pointer bg-[#060714] decoration-transparent">
                <i class="ph-fill ph-users text-white text-2xl"></i>
                <div class="text-white font-medium group-hover:translate-x-2 transition-all">Wali Kelas</div>
            </a>
        </div>
    </div>
    <div class="w-full h-full bg-secD">
        <div class="w-full h-screen mt-2 px-2 sm:px-0 transition-all">
            <div class="w-full h-full rounded-[10px] sm:pl-[15rem] overflow-auto pb-[5rem]">
                <div class="w-full bg-primaryD h-auto rounded-[10px] container pb-4">
                    <div class="w-full h-auto flex gap-2 pt-2 ">
                        <a href="{{ url('/dashboard/guru') }}"
                            class="w-auto h-auto flex justify-center items-center decoration-transparent text-black">
                            <i class="ph-bold ph-arrow-bend-up-left text-xl  p-2 bg-white rounded-full"></i>
                        </a>
                        <div class="w-auto h-auto">
                            <div class="font-bold text-xl text-white">Tambah Guru</div>
                            <div class="font-normal text-md text-white opacity-50">Isi data dibawah ini untuk menambahkan guru
                            </div>
                        </div>
                    </div>
                    <hr class="h-[1px] text-white my-2">
                    <form class="w-full h-auto gap-2 flex flex-col" wire:submit.prevent='save'>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Nama Guru:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-user-circle text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"  
                                    class="bg-gray-50   @error('nama') border-[2px] border-red-500 placeholder:text-red-500 @enderror font-semibold  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nama Lengkap" wire:model='nama'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Jabatan Guru:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-stack text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"  
                                    class="bg-gray-50   @error('jabatan') border-[2px] border-red-500 placeholder:text-red-500 @enderror font-semibold  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jabatan" wire:model='jabatan'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Deskripsi Guru:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-article text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"  
                                    class="bg-gray-50   @error('deskripsi') border-[2px] border-red-500 placeholder:text-red-500 @enderror font-semibold  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Deskripsi" wire:model='deskripsi'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Tempat Tanggal Lahir:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-calendar text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"  
                                    class="bg-gray-50   @error('ttl') border-[2px] border-red-500 placeholder:text-red-500 @enderror font-semibold  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="TTL" wire:model='ttl'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Sosmed Instagram:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-instagram-logo text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"  
                                    class="bg-gray-50   @error('ig') border-[2px] border-red-500 placeholder:text-red-500 @enderror font-semibold  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Username Instagram" wire:model='ig'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Sosmed Facebook:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-facebook-logo text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"  
                                    class="bg-gray-50   @error('fb') border-[2px] border-red-500 placeholder:text-red-500 @enderror font-semibold  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Username Facebook" wire:model='fb'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Mapel Guru:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-book-bookmark text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"
                                    class="bg-gray-50 @error('mapel') border-[2px] border-red-500 placeholder:text-red-500 @enderror font-semibold text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Mapel" wire:model='mapel'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Kode Guru:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-barcode text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"
                                    class="bg-gray-50  font-semibold @error('kode') border-[2px] border-red-500 placeholder:text-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Kode" wire:model='kode'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">NIP Guru:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-identification-badge text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"
                                    class="bg-gray-50  font-semibold @error('nip') border-[2px] border-red-500 placeholder:text-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="NIP" wire:model='nip'>
                            </div>
                        </div>
                        <div class="w-full h-auto flex flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Email Guru:<span class="text-red-500 text-lg"> *</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                                    <i class="ph-fill ph-envelope text-3xl"></i>
                                </div>
                                <input type="text" id="input-group-1"
                                    class="bg-gray-50  font-semibold @error('email') border-[2px] border-red-500 placeholder:text-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Email" wire:model='email'>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-full flex-col">
                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-white">Foto Guru:</label>
                            <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-32 border-2  @error('foto') border-red-500  @enderror border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            @if(!$foto)
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                            to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                                    </p>
                                    @else
                                    @endif
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" wire:model='foto' />
                            </label>
                        </div>
                        @error('foto')
                            <div class="text-red-500">file maksimal 1020mb</div>
                        @enderror
                        @if($foto)
                            <img src="{{ $foto->temporaryUrl()}}" alt="" class="mt-3 object-cover" style="width: 100px; height:100px;">
                        @endif
                        <hr class="h-[1px] text-white my-2">
                        <div class="w-full h-auto flex items-center">
                            <button class="py-2 px-4 bg-secD text-white flex justify-center items-center gap-2 rounded-[10px] group ">
                                Save
                                <i class="ph-fill ph-paper-plane-right group-hover:translate-x-2 transition-all"></i>
                            </button>
                        </div>
                    </form>
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
