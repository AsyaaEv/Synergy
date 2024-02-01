<section>
    <div class="lg:h-[50vh] h-[30vh]  bg-no-repeat bg-center bg-cover"
        style="background-image: url({{ Storage::url('assets/pplg/img/bg-sarana.jpg') }});">
    </div>
    <div class="container">
        @foreach ($data as $item)
            <div class="flex">
                <div class="md:w-52 md:h-52 w-32 h-32 md:-mt-28 -mt-16 mb-2 border-[10px] border-white rounded-full">
                    <img class="h-full w-full object-top object-cover rounded-full"
                        src="{{ Storage::url($item->foto) }}" alt="">
                </div>
                <h1 class="md:text-3xl text-xl font-bold md:w-[40%] w-[60%]">{{$item->nama}}</h1>
            </div>

            <div class="content-wrap flex justify-between flex-col md:flex-row">
                <div class="md:w-[35%]">
                    <h1 class="text-3xl font-bold pt-5 relative pr-7">Profil<i
                            class="ph-bold ph-identification-card text-4xl absolute bottom-0.5 ml-1.5"></i></h1>
                    <div class="flex border-2 border-[#f78704] rounded-lg mb-3 p-3 shadow-xl">
                        <div>
                            <p class="font-semibold text-xl mb-2.5 text-black">Nama Lengkap</p>
                            <p class="bg-[#e8e8ed] text-black mb-4 inline-block py-2 px-3 rounded-lg font-semibold">
                                {{$item->nama}}</p>
                            <p class="font-semibold text-xl mb-2.5 text-black">Nama Panggilan</p>
                            <p class="bg-[#e8e8ed] text-black mb-4 inline-block py-2 px-3 rounded-lg font-semibold">{{$item->nama_panggilan}}</p>
                            <p class="font-semibold text-xl mb-2.5 text-black">Kode Guru</p>
                            <p class="bg-[#e8e8ed] text-black mb-4 inline-block py-2 px-3 rounded-lg font-semibold">{{$item->kode}}</p>
                            <p class="font-semibold text-xl mb-2.5 text-black">Mapel</p>
                            <p class="bg-[#e8e8ed] text-black mb-4 inline-block py-2 px-3 rounded-lg font-semibold">{{$item->mapel}}
                            </p>
                            <p class="font-semibold text-xl mb-2.5 text-black">Tempat / Tanggal Lahir</p>
                            <p class="bg-[#e8e8ed] text-black mb-4 inline-block py-2 px-3 rounded-lg font-semibold">
                                {{$item->ttl}}</p>
                        </div>
                    </div>

                    <div
                        class="border-2 border-[#f78704] rounded-lg mb-4 shadow-xl h-28 flex justify-center items-center @if(!$item->ig && !$item->fb) hidden @endif">
                        <div class="flex gap-4">
                            <i class="ph ph-instagram-logo text-5xl p-3 rounded-lg text-white bg-slate-600 @if(!$item->ig) hidden @endif"></i>
                            <i class="ph ph-facebook-logo text-5xl p-3 rounded-lg text-white bg-slate-600 @if(!$item->fb) hidden @endif"></i>
                        </div>
                    </div>
                </div>
                <div class="md:w-[60%] ">
                    <h1 class="text-3xl font-bold pt-5 relative pr-7">Pendidikan<i
                            class="ph-bold ph-graduation-cap text-4xl absolute bottom-0.5 ml-1.5"></i></h1>
                    <div class="justify-start text-start flex">
                        <div class="w-full">
                            <div class="border-2 border-[#f78704] rounded-lg mb-4 p-3 shadow-xl">
                                <p class="font-semibold text-xl  mb-2.5 text-black">Sarjana</p>
                                <p class="bg-[#e8e8ed] text-black mb-4 inline-block py-2 px-3 rounded-lg font-semibold">
                                    S1 Pendikan IT</p>
                            </div>
                            <h1 class="text-3xl font-bold relative pr-7">Prestasi<i
                                    class="ph-bold ph-trophy text-4xl absolute bottom-0 ml-1.5"></i></h1>
                            <div class="border-2 border-[#f78704] rounded-lg mb-4 p-3 shadow-xl ">
                                <p class="font-semibold text-xl mb-2.5 text-black">Juara 1</p>
                                <p class="bg-[#e8e8ed] text-black mb-4 inline-block py-2 px-3 rounded-lg font-semibold">
                                    Lomba Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
