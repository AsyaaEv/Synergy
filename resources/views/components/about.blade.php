<section id="about" class="bg-[#0D0D0D]">
    <div class="container py-5 ">
        <h1 class="border-[1px] rounded-[10px] border-white p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-white font-bold">About Us</h1>
        <h1 class="text-white mt-20 pb-4 border-b-[1px] border-[#626262] font-bold">Presenting Puperior Service Through Innovative Concepts That Dare To Be Different</h1>
        <p class="text-[16px] text-[#D0D0D0] font-bold mt-4 md:w-[70%]">Our major studies and explores ways of developing software. Starting from creation, maintenance, quality management, and management of software development organizations.</p>
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

    .swiper-pagination .swiper-pagination-bullet{
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
</body>

</html>
