<section id="sarana" style="background-size: cover; background-position: center; background-repeat: no-repeat; background-image: url({{ Storage::url('assets/pplg/img/bg-sarana.jpg') }});">
    <div class="container py-20 flex flex-col lg:flex-row">
        <div class="lg:w-[50%]">
            <h1 class="border-[1px] rounded-[10px] border-black p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-black font-bold">
                Sarana Prasarana</h1>
            <div class=" lg:ml-14 mt-16">
                <div class="w-full mb-20">
                    <h1 class="font-bold text-[2rem] mb-4">Sarana</h1>
                    <hr class="w-full lg:ml-6" style=" border-width: 2px; color: #626262;">
                    <p class="lg:ml-6 font-bold text-[#676767]">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Porro dolore voluptatem voluptas sunt architecto perspiciatis deserunt debitis repellat
                        minus ab.</p>
                </div>
                <div class="w-full">
                    <h1 class="font-bold text-[2rem] mb-4">Prasarana</h1>
                    <hr class="w-full lg:ml-6" style=" border-width: 2px; color: #626262;">
                    <p class="lg:ml-6 font-bold text-[#676767] md:mb-10">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Porro dolore voluptatem voluptas sunt architecto perspiciatis deserunt debitis
                        repellat minus ab.</p>
                </div>
            </div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper ">
                <div class="swiper-slide img-fluid mx-20">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                </div>
                <div class="swiper-slide img-fluid mx-20">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                </div>
                <div class="swiper-slide img-fluid mx-20">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                </div>
                <div class="swiper-slide img-fluid mx-20">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<style>
    .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 500px;
        height: 400px;
    }


    .swiper-slide img {
        width: 100%;
        height: 100%
    }

    .swiper-pagination .swiper-pagination-bullet {
        background-color: #fff;
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
            rotate: 0
            , stretch: 0
            , depth: 300
            , modifier: 1
            , slideShadows: true
        , }

        , pagination: {
            el: ".swiper-pagination"
        , }
        , loop: true

    , });

</script>
