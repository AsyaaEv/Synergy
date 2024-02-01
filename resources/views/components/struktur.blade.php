<section id="struktur" class="">
    <div class="container py-5">
        <h1 class="border-[1px] rounded-[10px] border-black p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-hitam font-bold">Struktur Organisasi</h1>
        <div class="flex justify-center py-5">
            <h1 class="text-2xl font-bold text-center w-[55%]" data-aos-once="true" data-aos="fade-down">STRUKTUR ORGANISASI JURUSAN PENGEMBANGAN PERANGKAT LUNAK DAN GIM</h1>
        </div>
        <div class="flex flex-wrap justify-center" data-aos='fade-right' data-aos-once="true">  
            @foreach ($guru as $item)
            <div class="lg:w-[350px] lg:h-[500px] w-[300px] h-[450px] bg-red-600 relative rounded-3xl group mx-2 mb-6 overflow-hidden">
                <img class="w-full h-full object-cover rounded-3xl" src="{{ Storage::url($item->foto)}}" alt="">
                <div class="text-white absolute lg:-bottom-[11.5rem] -bottom-[13rem] group-hover:bottom-0 transition-all delay-100 z-10 px-4 pb-4 overflow-hidden">
                    <h1 class="text-2xl font-bold">{{$item->nama}}</h1>
                    <p class="mb-3">{{$item->jabatan}}</p>
                    <p class="">{{$item->deskripsi}}</p>
                    <a class="text-white border-b-[1.5px] border-white no-underline group" href="{{url('/profil-guru/'. $item->nama)}}">Selengkapnya<i class="no-underline ph-bold ph-arrow-right text-xs md:text-xl align-middle md:ml-1"></i></a>
                </div>
                <div class="group-hover:h-[35rem] transition-all delay-100 rounded-3xl absolute bottom-0 w-full h-60 linear bg-gradient-to-b from-transparent to-black"></div>
            </div>    
            @endforeach  
        </div>
    </div>
</section>

<style>

</style>
