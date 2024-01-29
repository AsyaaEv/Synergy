<section id="sarana" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url({{ Storage::url('assets/pplg/img/bg-sarana.jpg') }});">
    <div class="container py-20 flex flex-col lg:flex-row">
        <div class="w-full">
            <h1 class="border-[1px] rounded-[10px] border-black p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-black font-bold">
                Sarana Prasarana</h1>
            <div class="flex flex-col md:flex-row item-center justify-between">
                <div class="md:w-[40%] mt-16">
                    <div class="mb-10">
                        <h1 class="font-bold text-[2rem] mb-4">Sarana</h1>
                        <hr class=" lg:ml-6" style=" border-width: 2px; color: #626262;">
                        <p class="lg:ml-6 font-medium text-[#676767]">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Porro dolore voluptatem voluptas sunt architecto perspiciatis deserunt debitis repellat
                            minus ab.</p>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-[2rem] mb-4">Prasarana</h1>
                        <hr class=" lg:ml-6" style=" border-width: 2px; color: #626262;">
                        <p class="lg:ml-6 font-medium text-[#676767] md:mb-10">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Porro dolore voluptatem voluptas sunt architecto perspiciatis deserunt debitis
                            repellat minus ab.</p>
                    </div>
                </div>
                <div class="md:w-1/2 swiper mySwiper">
                    <div class="swiper-wrapper pb-20">
                        <div class="swiper-slide img-fluid mx-2 shadow-xl">
                            <img class="rounded-2xl" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide img-fluid mx-2 shadow-xl">
                            <img class="rounded-2xl" src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide img-fluid mx-2 shadow-xl">
                            <img class="rounded-2xl" src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide img-fluid mx-2 shadow-xl">
                            <img class="rounded-2xl" src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .swiper {
        padding-top: 70px;
        margin: 0;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 400px;
        height: 350px;
    }


    .swiper-slide img {
        width: 100%;
        height: 100%
    }

    .swiper-pagination .swiper-pagination-bullet {
        background-color: black;
        width: 0.8rem;
        height: 0.8rem;
    }

</style>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
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
        , }

    , });

</script>
