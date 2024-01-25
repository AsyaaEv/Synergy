<section id="about" class="bg-[#0D0D0D]">
    <div class="container py-5 ">
        <h1 class="border-[3px] rounded-[10px] border-white p-[10px] inline-block m-0 text-[25px] text-white">About Us</h1>
        <h1 class="text-white text-[44.726px] mt-20 pb-4 border-b-[1px] border-[#626262] font-bold">Presenting Puperior Service Through Innovative Concepts That Dare To Be Different</h1>
        <p class="text-[20px] text-[#D0D0D0] font-bold mt-4 w-[70%]">Our major studies and explores ways of developing software. Starting from creation, maintenance, quality management, and management of software development organizations.</p>
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
