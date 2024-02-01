<div class="w-full h-screen mt-2 px-2 sm:px-0 transition-all">
    <div class="w-full h-full rounded-[10px] sm:pl-[15rem] overflow-auto pb-[5rem] table-responsive">
        <div class="w-full h-auto mb-2 flex justify-between items-center">
            <div class="w-full h-auto">
                <div class="text-xl text-white font-bold">Dashboard</div>
                <div class="text-white/50">Guru Produktif PPLG</div>
            </div>
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
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-full h-auto flex justify-end px-2 gap-2">
                <div class=" flex justify-center items-center decoration-transparent">
                    <div class="relative">
                        <i class="ph-bold ph-magnifying-glass absolute inset-y-1 start-0 ps-2 text-secD text-2xl "></i>
                        <input type="text" placeholder="Search Guru"
                            class="outline-none text-medium w-auto h-8 pl-8 py-2 bg-white rounded-[10px] font-bold focus:ring-primaryD"
                            wire:model.live='search'>
                    </div>
                </div>
                <a href="/dashboard/guru/add"
                    class="w-[2rem] lg:w-auto h-8 px-2 py-2 bg-white rounded-[10px] flex justify-center items-center decoration-transparent">
                    <i class="ph-fill ph-student text-secD text-2xl"></i>
                    <div class="text-secD font-semibold hidden lg:block">Tambah Guru</div>
                </a>
            </div>
        </div>
        <div class="w-full h-auto grid gap-2 grid-cols-1 md:grid-cols-2">
            @forelse ($guru as $item)
                <div class="w-full h-[6rem] bg-primaryD rounded-[10px] flex gap-2 shadow-md">
                    <div class="w-full h-full flex justify-center items-center">
                        <img src="{{ Storage::url($item->foto) }}" alt=""
                            class="w-[5rem] h-[5rem] object-cover rounded-full">
                    </div>
                    <div class="w-full h-full flex justify-center items-center flex-col">
                        <div class="w-full h-full flex items-center gap-2">
                            <i class="ph-fill ph-user text-white text-2xl"></i>
                            <div class="text-white">Nama : <strong>{{ $item->nama }}</strong></div>
                        </div>
                        <div class="w-full h-full flex items-center gap-2">
                            <i class="ph-fill ph-book text-white text-2xl"></i>
                            <div class="text-white">Mapel : <strong>{{ $item->mapel }}</strong></div>
                        </div>
                        <div class="w-full h-full flex items-center gap-2">
                            <i class="ph-fill ph-door text-white text-2xl"></i>
                            <div class="text-white">Kode Guru : <strong>{{ $item->kode }}</strong></div>
                        </div>
                    </div>
                    <div class="w-[20%] h-auto flex flex-col justify-between items-center py-2 mr-2">
                        <a href="{{ url('/dashboard/guru/edit/' . $item->id) }}"
                            class="decoration-transparent p-2 bg-blue-300 rounded-[10px] flex justify-center items-center">
                            <i class="ph-fill ph-pencil text-xl text-blue-500"></i>
                        </a>
                        <a href=""
                            class="decoration-transparent p-2 bg-green-300 rounded-[10px] flex justify-center items-center">
                            <i class="ph-fill ph-eye text-xl text-green-500"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="w-full h-auto">
                    <div class="w-full h-full flex justify-center mt-[5rem]">
                        <div
                            class="w-[25rem] h-[10rem] bg-primaryD rounded-[10px] border-[1px] flex justify-center items-center gap-2">
                            <i class="ph-fill ph-warning text-5xl text-white"></i>
                            <div class="text-xl text-white font-medium">Data Walikelas Tidak Ada!</div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>

<script>
    const alert = document.getElementById('alert')

    function toggleAlert() {
        alert.classList.add('-translate-x-[20rem]')
    }
</script>
