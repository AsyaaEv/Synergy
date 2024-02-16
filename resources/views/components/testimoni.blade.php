<section id="testimoni" class="py-5">
    <div class="container">
        <h1 class="border-[1px] rounded-[10px] border-black p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-black font-bold">Testimoni</h1>
        <div class="swiper swiper-test mySwiper-test py-5 h-full w-full">
            <div class="swiper-wrapper">
                <div class=" swiper-slide slide-test shadow-xl flex flex-col p-7 overflow-hidden rounded-lg border-2 border-[#f78704]">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="md:w-[4.5rem] md:h-[4.5rem] w-14 h-14 mb-3">
                            <img class="h-full w-full object-top object-cover rounded-full" src="https://cms.disway.id/uploads/293ceeded9507edc186a39d5b8792280.jpeg" alt="">
                        </div>
                        <div>
                            <p class="mb-0 font-bold md:text-2xl text-xl">Jaka Pratama</p>
                            <p class="text-base">FrontEnd Dev</p>
                        </div>
                    </div>
                    <p class="text-lg font-bold mb-0">"Keren banget suka ama pembelajarannya"</p>
                    <p class="font-medium text-[#000000] py-3">"Jujurly jurusan pplg tuh ada di banyak smk di Indonesia, tapi yang paling bagus untuk jurusan pplg tuh cuma di smkn1 bangsri. karena meyediakan banyak sarana untuk mengembangkan skill dan pelatihan industri yang nyata"</p>
                </div>
                <div class=" swiper-slide slide-test shadow-xl flex flex-col p-7 overflow-hidden rounded-lg border-2 border-[#f78704]">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="md:w-[4.5rem] md:h-[4.5rem] w-14 h-14 mb-3">
                            <img class="h-full w-full object-top object-cover rounded-full" src="https://awsimages.detik.net.id/community/media/visual/2016/10/07/1f310a6b-1204-4920-a100-b551ce14cfff_34.jpg?w=600&q=90" alt="">
                        </div>
                        <div>
                            <p class="mb-0 font-bold md:text-2xl text-xl">Anggita Lestari</p>
                            <p class="text-base">Graphic Designer</p>
                        </div>
                    </div>
                    <p class="text-lg font-bold mb-0">"Gak ada yang ngalahin emang"</p>
                    <p class="font-medium text-[#000000] py-3">"Sekolah terbaik si menurut saya, karena fasilitasnya yang lengkap dan memadai untuk pembelajaran. Untuk sekolah Negeri jujur fasilitasnya udah bikin nyaman dan betah belajar lama-lama "</p>
                </div>
                <div class=" swiper-slide slide-test shadow-xl flex flex-col p-7 overflow-hidden rounded-lg border-2 border-[#f78704]">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="md:w-[4.5rem] md:h-[4.5rem] w-14 h-14 mb-3">
                            <img class="h-full w-full object-top object-cover rounded-full" src="https://static.republika.co.id/uploads/images/inpicture_slide/dheo-sanjaya-anak-petani-sawit-kuliah-di-kampus-digital_221209120050-172.jpeg" alt="">
                        </div>
                        <div>
                            <p class="mb-0 font-bold md:text-2xl text-xl">Azmi Nabil</p>
                            <p class="text-base">BackEnd Dev</p>
                        </div>
                    </div>
                    <p class="text-lg font-bold mb-0">"SMK gue banget nih, jurusan PPLG!</p>
                    <p class="font-medium text-[#000000] py-3">"Gue masuk jurusan PPLG, bisa ngutak-atik kode sambil nongkrong di lab komputer yang kece, Guru-gurunya juga santai tapi kompeten banget. Plus, ada kesempatan buat magang di perusahaan IT, jadi bener-bener siap tempur pas lulus nanti. Pokoknya, SMK PPLG ini juara deh!"</p>
                </div>
                <div class=" swiper-slide slide-test shadow-xl flex flex-col p-7 overflow-hidden rounded-lg border-2 border-[#f78704]">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="md:w-[4.5rem] md:h-[4.5rem] w-14 h-14 mb-3">
                            <img class="h-full w-full object-top object-cover rounded-full" src="https://news.nusamandiri.ac.id/wp-content/uploads/2021/10/WhatsApp-Image-2021-10-22-at-10.09.24.jpeg" alt="">
                        </div>
                        <div>
                            <p class="mb-0 font-bold md:text-2xl text-xl">Leysha Delila</p>
                            <p class="text-base">Mobile App Dev</p>
                        </div>
                    </div>
                    <p class="text-lg font-bold mb-0">"Gak nyesel pilih PPLG"</p>
                    <p class="font-medium text-[#000000] py-3">"Jurusan PPLG emang pilihan yang tepat buat saya. Lab komputer bikin coding jadi makin asyik, ditambah guru-guru yang emang paham banget. Belum lagi, ada pelatihan langsung sama perusahaan IT, jadi langsung dapet pengalaman beneran. Dijamin, di SMK ini, bakal jadi programmer kece deh!"</p>
                </div>
               
            </div>
            <div class="flex justify-center">
                <div class="arrow-swiper-test">
                    <div class="swiper-pagination pag-sar"></div>
                    <div class="swiper-button-next arrow-icon"></div>
                    <div class="swiper-button-prev arrow-icon"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .pag-test .swiper-pagination-bullet {
            background-color: black;
            width: 0.6rem;
            height: 0.6rem;
        }

        .slide-test {
            width: 100%;
            min-height: 450px;
        }

        .arrow-swiper-test {
            position: relative;
            bottom: -3rem;
            display: flex;
            justify-content: center;
            width: 15rem;
        }
        
        @media (min-width: 768px) {
            .slide-test {
                width: 540px;
                min-height: 400px;
            }
        }

    </style>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper-test", {
            slidesPerView: "auto"
            , spaceBetween: 30
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
</section>
