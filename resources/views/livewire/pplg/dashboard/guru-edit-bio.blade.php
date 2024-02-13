<div data-dialog-backdrop="dialog"
    class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black/30 bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
    <div data-dialog="dialog"
        class="relative mx-auto flex w-full max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="w-full h-auto py-2 container">
            <div class="w-full h-auto">
                <div class="font-bold ">Edit Guru Bio ({{ $this->nama }})</div>
                <div class="text-sm">Silakan ganti data di bawah ini untuk mengedit</div>
            </div>
            <div class="w-full h-auto mt-4">
                <form action="" wire:submit.prevent='editBioGuru'>
                    <div class="w-full h-auto flex flex-col">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">Nama Lengkap:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-user-circle text-2xl"></i>
                            </span>
                            <input type="text" wire:model='nama'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="w-full h-auto flex flex-col mt-2">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">Nama Panggilan:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-user text-2xl"></i>
                            </span>
                            <input type="text" wire:model='nama_panggilan'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama anggilan">
                        </div>
                    </div>
                    <div class="w-full h-auto flex flex-col mt-2">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">jabatan:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-stack text-2xl"></i>
                            </span>
                            <input type="text" wire:model='jabatan'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jabatan">
                        </div>
                    </div>
                    <div class="w-full h-auto flex flex-col mt-2">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">Tempat, tanggal
                            lahir:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-calendar text-2xl"></i>
                            </span>
                            <input type="text" wire:model='ttl'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Tempat, tanggal lahir">
                        </div>
                    </div>
                    <div class="w-full h-auto flex flex-col mt-2">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">Mapel:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-book-bookmark text-2xl"></i>
                            </span>
                            <input type="text" wire:model='mapel'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Mapel">
                        </div>
                    </div>
                    <div class="w-full h-auto flex flex-col mt-2">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">Kode Guru:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-barcode text-2xl"></i>
                            </span>
                            <input type="text" wire:model='kode'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Kode">
                        </div>
                    </div>
                    <div class="w-full h-auto flex flex-col mt-2">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">NIP Guru:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-identification-badge text-2xl"></i>
                            </span>
                            <input type="text" wire:model='nip'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="NIP">
                        </div>
                    </div>
                    <div class="w-full h-auto flex flex-col mt-2">
                        <label for="website-admin"
                            class="block  text-sm font-semibold text-gray-900 dark:text-white">Email Guru:</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="ph-fill ph-envelope text-2xl"></i>
                            </span>
                            <input type="text" wire:model='email'
                                class="rounded-none rounded-e-lg font-medium bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="w-full h-auto mt-4 flex justify-center items-center gap-2">
                        <button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button"
                            data-ripple-light="true" data-dialog-close='true'> 
                            Batal</button>
                        <button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="submit"
                            data-ripple-light="true">
                            Ubah</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="p-6 pt-0">
            <button
                class="block w-full select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                Sign In
            </button>
        </div> --}}
    </div>
</div>
