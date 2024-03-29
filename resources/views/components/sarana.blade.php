<section id="sarana" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url({{ Storage::url('assets/pplg/img/bg-sarana.jpg') }});">
    <div class="container py-20 flex flex-col lg:flex-row">
        <div class="w-full">
            <h1 class="border-[1px] rounded-[10px] border-black p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-black font-bold">
                Sarana Prasarana</h1>
            <div class="flex flex-col md:flex-row item-center justify-between">
                <div class="md:w-[40%] mt-16">
                    <div class="mb-10">
                        <h1 class="font-bold text-[2rem] mb-4 text-[#87897]">Sarana</h1>
                        <p class="lg:ml-6 font-medium text-[#676767] border-t-[1.5px] border-[#676767] pt-6 md:mb-10" data-aos='fade-right' data-aos-once="true">
                            Di SMK dengan jurusan PPLG, sarana mencakup ruang laboratorium komputer yang dilengkapi dengan perangkat keras dan perangkat lunak terkini, serta dilengkapi proyektor dan papan tulis interaktif untuk mendukung pembelajaran interaktif.</p>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-[2rem] mb-4">Prasarana</h1>
                        <p class="lg:ml-6 font-medium text-[#676767] border-t-[1.5px] border-[#676767] pt-6 md:mb-10" data-aos='fade-right' data-aos-once="true">Prasarana yang tersedia mencakup jaringan internet cepat untuk mengakses sumber daya online, sistem manajemen pembelajaran digital untuk penyampaian materi secara online, dan kerjasama dengan industri lokal untuk pelatihan praktik secara langsung di tempat kerja.</p>
                    </div>
                </div>
                <div class="md:w-1/2 lg:h-screen flex items-center">
                    <div class="swiper swiper-sarana lg:pt-[70px] mySwiper-sarana">
                        <div class="swiper-wrapper slide-sar-wrap pb-20 ">
                            <div class="swiper-slide slide-sar img-fluid mx-2 shadow-xl">
                                <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/sarana-1.jpg')}}" />
                            </div>
                            <div class="swiper-slide img-fluid mx-2 slide-sar shadow-xl">
                                <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/sarana-2.jpg')}}" />
                            </div>
                            <div class="swiper-slide img-fluid mx-2 slide-sar shadow-xl">
                                <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/sarana-3.jpg')}}" />
                            </div>
                            <div class="swiper-slide img-fluid mx-2 slide-sar shadow-xl">
                                <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/sarana-4.jpg')}}" />
                            </div>
                            <div class="swiper-slide img-fluid mx-2 slide-sar shadow-xl">
                                <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/sarana-5.jpg')}}" />
                            </div>
                            <div class="swiper-slide img-fluid mx-2 slide-sar shadow-xl">
                                <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/sarana-6.jpg')}}" />
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="arrow-swiper-sar">
                                <div class="swiper-pagination pag-sar"></div>
                                <div class="swiper-button-next arrow-icon"></div>
                                <div class="swiper-button-prev arrow-icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .swiper-sarana {
        padding-top: 70px;
        margin: 0;
        height: 500px;
    }

    .slide-sar {
        background-position: center;
        background-size: cover;
        width: 400px;
        height: 350px;
    }


    .slide-sar img {
        width: 100%;
        height: 100%
    }

    .pag-sar .swiper-pagination-bullet {
        width: 0.6rem;
        height: 0.6rem;
    }

    .arrow-swiper-sar {
        position: relative;
        bottom: 8rem;
        display: flex;
        justify-content: center;
        width: 15rem;
    }

    .pag-sar {
        position: relative;
    }

    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        width: 10rem;
        text-align: center;
        margin-top: 1rem;
    }

    .swiper-pagination-bullet-active {
        background: #000;
    }

    .arrow-icon {
        position: absolute;
        color: rgb(37, 37, 37);
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 2rem;
    }

</style>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper-sarana", {
        effect: "coverflow"
        , grabCursor: true
        , centeredSlides: true
        , slidesPerView: "auto"

        , coverflowEffect: {
            rotate: 30
            , stretch: 0
            , depth: 0
            , modifier: 1
            , slideShadows: true

        , }

        , pagination: {
            el: ".swiper-pagination"
            , clickable: true
        , }

        , navigation: {
            nextEl: ".swiper-button-next"
            , prevEl: ".swiper-button-prev"

        , }

    , });

</script>
