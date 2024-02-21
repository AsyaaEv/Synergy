<section class="w-full h-screen">
    <div class="lg:h-[50vh] h-[30vh]  bg-no-repeat bg-center bg-cover" style="background-image: url({{ Storage::url('assets/pplg/img/bgVisiMIsi.jpg') }})">
    </div>
    <div class="container md:flex-row flex flex-col md:justify-between lg:h-[80svh] border-b-2 border-solid pb-8 px-4">
        <div class="flex-col md:w-[35%] justify-center w-full">
            <div class="lg:w-52 lg:h-52 md:w-36 md:h-36 w-32 h-32 lg:-mt-28 md:-mt-12 lg:ml-20 ml-[9.5rem] md:ml-[2.5rem] -mt-16 mb-2 flex justify-center border-[10px] border-white rounded-full">
                <img class="h-full w-full object-top object-cover rounded-full pointer-events-none" src="{{ Storage::url('assets/pplg/img/iwan.jpg') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center mt-4 md:mt-6 lg:mt-0">
                <h1 class="lg:text-xl md:text-sm text-sm font-bold px-2 py-2 border-2 md:rounded-2xl rounded-lg border-hitam">Iwan Safrudin, S.Kom</h1>
                <h1 class="lg:text-xl text-lg font-semibold text-center mt-2">Wali Kelas X PPLG 2</h1>
                <a href="/profil-iwan" class="text-decoration-none w-[5rem] lg:w-[7rem] bg-secD border-2 border-hitam md:py-3 py-2 px-3 lg:px-6 mt-3 rounded-lg lg:text-xl text-sm font-bold text-hitam hover:text-orange hover:border-orange transition-all">Profile</a>
            </div>
        </div>
        <div class="bg-secD md:w-[60%] w-full  h-auto mt-10 border-hitam border-2 shadow-2xl rounded-3xl">
            <div class="flex justify-start ml-7 md:mt-5 mt-4">
                <h1 class="md:text-xl text-lg font-bold px-3 py-2 border-2 rounded-lg border-hitam">Bio Data</h1>
            </div>
            <div class="w-full flex justify-center flex-col items-center">
                <div class="w-[90%] flex md:flex-wrap lg:flex-nowrap mt-4 h-auto lg:gap-0 gap-5 ">
                    <div class="flex-col w-[28.3%] ml-3 md:ml-0">
                        <h1 class="md:text-xl text-base font-semibold">Kelas</h1>
                        <div class="flex shadow md:w-[8rem] w-[5rem] bg-secD md:h-[3rem] h-[2.5rem] md:rounded-lg rounded-[0.3rem] justify-center items-center">
                            <h1 class="md:text-base text-sm font-semibold uppercase md:mt-3 mt-2">X pplg 2</h1>
                        </div>
                    </div>
                    <div class="flex-col w-[28.3%] ml-5">
                        <h1 class="md:text-xl text-base font-semibold">Angkatan</h1>
                        <div class="flex shadow md:w-[8rem] w-[5rem] bg-secD md:h-[3rem] h-[2.5rem] md:rounded-lg rounded-[0.3rem] justify-center items-center">
                            <h1 class="md:text-base text-sm font-semibold uppercase md:mt-3 mt-2">2023</h1>
                        </div>
                    </div>
                    {{-- <div class="flex flex-col lg:w-[28.3%] w-[30%] ml-3 lg:ml-0 mr-5 mt-2">
                        <p class="font-semibold text-slate-600 text-sm text-start">Sosial Media :</p>
                        <div class="space-x-3 flex">
                            <a href="#">
                                <div class="shrink-0 w-[25px] h-[25px] relative overflow-hidden">
                                    <svg class="h-auto absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] overflow-visible" style="" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28.3281 0H8.67188C3.88253 0 0 3.88253 0 8.67188V28.3281C0 33.1175 3.88253 37 8.67188 37H28.3281C33.1175 37 37 33.1175 37 28.3281V8.67188C37 3.88253 33.1175 0 28.3281 0Z" fill="url(#paint0_radial_438_19)" />
                                        <path d="M28.3281 0H8.67188C3.88253 0 0 3.88253 0 8.67188V28.3281C0 33.1175 3.88253 37 8.67188 37H28.3281C33.1175 37 37 33.1175 37 28.3281V8.67188C37 3.88253 33.1175 0 28.3281 0Z" fill="url(#paint1_radial_438_19)" />
                                        <path d="M18.5013 4.04688C14.5761 4.04688 14.0834 4.06407 12.5418 4.13417C11.0032 4.2047 9.95286 4.44824 9.03393 4.80566C8.0832 5.1748 7.27686 5.66866 6.47355 6.47225C5.66953 7.2757 5.17566 8.08204 4.80538 9.03234C4.44694 9.95155 4.20311 11.0023 4.13388 12.5403C4.06494 14.082 4.04688 14.5748 4.04688 18.5001C4.04688 22.4255 4.06422 22.9166 4.13417 24.4582C4.20499 25.9968 4.44853 27.0471 4.80566 27.9661C5.17509 28.9168 5.66895 29.7231 6.47254 30.5264C7.2757 31.3305 8.08204 31.8255 9.03205 32.1946C9.9517 32.5521 11.0022 32.7956 12.5405 32.8661C14.0823 32.9362 14.5745 32.9534 18.4996 32.9534C22.4252 32.9534 22.9163 32.9362 24.4579 32.8661C25.9965 32.7956 27.048 32.5521 27.9677 32.1946C28.918 31.8255 29.7231 31.3305 30.5262 30.5264C31.3302 29.7231 31.8239 28.9168 32.1943 27.9665C32.5496 27.0471 32.7936 25.9965 32.8658 24.4584C32.9351 22.9169 32.9531 22.4255 32.9531 18.5001C32.9531 14.5748 32.9351 14.0823 32.8658 12.5405C32.7936 11.0019 32.5496 9.9517 32.1943 9.03277C31.8239 8.08204 31.3302 7.2757 30.5262 6.47225C29.7223 5.66837 28.9182 5.17451 27.9668 4.80581C27.0454 4.44824 25.9945 4.20456 24.4558 4.13417C22.9141 4.06407 22.4233 4.04688 18.4968 4.04688H18.5013ZM17.2047 6.65147C17.5896 6.65089 18.019 6.65147 18.5013 6.65147C22.3604 6.65147 22.8177 6.66535 24.3417 6.73458C25.7508 6.79904 26.5157 7.03448 27.0252 7.23234C27.6997 7.49423 28.1806 7.80743 28.6861 8.31344C29.192 8.8193 29.505 9.30102 29.7677 9.97555C29.9655 10.4843 30.2013 11.2492 30.2654 12.6583C30.3347 14.182 30.3497 14.6396 30.3497 18.4968C30.3497 22.3541 30.3347 22.8118 30.2654 24.3353C30.201 25.7445 29.9655 26.5093 29.7677 27.0182C29.5058 27.6928 29.192 28.173 28.6861 28.6786C28.1803 29.1845 27.7 29.4975 27.0252 29.7596C26.5163 29.9583 25.7508 30.1932 24.3417 30.2576C22.818 30.3268 22.3604 30.3419 18.5013 30.3419C14.642 30.3419 14.1846 30.3268 12.6611 30.2576C11.2519 30.1926 10.487 29.9571 9.97714 29.7593C9.30275 29.4972 8.82089 29.1842 8.31503 28.6783C7.80917 28.1725 7.49611 27.6919 7.2335 27.0171C7.03564 26.5082 6.79991 25.7433 6.73573 24.3341C6.6665 22.8105 6.65263 22.3529 6.65263 18.4932C6.65263 14.6336 6.6665 14.1784 6.73573 12.6547C6.8002 11.2455 7.03564 10.4807 7.2335 9.97121C7.49554 9.29668 7.80917 8.81496 8.31517 8.3091C8.82103 7.80324 9.30275 7.49004 9.97728 7.22757C10.4868 7.02884 11.2519 6.79398 12.6611 6.72923C13.9944 6.66896 14.5111 6.65089 17.2047 6.64786V6.65147ZM26.2164 9.05127C25.2589 9.05127 24.482 9.8274 24.482 10.7851C24.482 11.7426 25.2589 12.5194 26.2164 12.5194C27.1739 12.5194 27.9508 11.7426 27.9508 10.7851C27.9508 9.82755 27.1739 9.05069 26.2164 9.05069V9.05127ZM18.5013 11.0777C14.4024 11.0777 11.079 14.4011 11.079 18.5001C11.079 22.5992 14.4024 25.921 18.5013 25.921C22.6004 25.921 25.9225 22.5992 25.9225 18.5001C25.9225 14.4012 22.6001 11.0777 18.501 11.0777H18.5013ZM18.5013 13.6823C21.162 13.6823 23.3191 15.8392 23.3191 18.5001C23.3191 21.1608 21.162 23.3179 18.5013 23.3179C15.8405 23.3179 13.6836 21.1608 13.6836 18.5001C13.6836 15.8392 15.8405 13.6823 18.5013 13.6823Z" fill="white" />
                                        <defs>
                                            <radialGradient id="paint0_radial_438_19" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(9.82812 39.8497) rotate(-90) scale(36.6697 34.1058)">
                                                <stop stop-color="#FFDD55" />
                                                <stop offset="0.1" stop-color="#FFDD55" />
                                                <stop offset="0.5" stop-color="#FF543E" />
                                                <stop offset="1" stop-color="#C837AB" />
                                            </radialGradient>
                                            <radialGradient id="paint1_radial_438_19" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-6.19764 2.6653) rotate(78.681) scale(16.3916 67.5666)">
                                                <stop stop-color="#3771C8" />
                                                <stop offset="0.128" stop-color="#3771C8" />
                                                <stop offset="1" stop-color="#6600FF" stop-opacity="0" />
                                            </radialGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <svg class="shrink-0 w-[25px] h-[25px] relative overflow-visible" style="" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_438_23)">
                                        <path d="M37 18.5C37 8.2828 28.7172 0 18.5 0C8.2828 0 0 8.2828 0 18.5C0 27.7338 6.76522 35.3875 15.6094 36.7753V23.8477H10.9121V18.5H15.6094V14.4242C15.6094 9.78766 18.3714 7.22656 22.5972 7.22656C24.6212 7.22656 26.7383 7.58789 26.7383 7.58789V12.1406H24.4055C22.1074 12.1406 21.3906 13.5667 21.3906 15.0298V18.5H26.5215L25.7013 23.8477H21.3906V36.7753C30.2348 35.3875 37 27.734 37 18.5Z" fill="#1877F2" />
                                        <path d="M25.7013 23.8477L26.5215 18.5H21.3906V15.0298C21.3906 13.5666 22.1074 12.1406 24.4055 12.1406H26.7383V7.58789C26.7383 7.58789 24.6212 7.22656 22.597 7.22656C18.3714 7.22656 15.6094 9.78766 15.6094 14.4242V18.5H10.9121V23.8477H15.6094V36.7753C16.5656 36.9251 17.5321 37.0003 18.5 37C19.4679 37.0003 20.4344 36.9251 21.3906 36.7753V23.8477H25.7013Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_438_23">
                                            <rect width="37" height="37" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg class="shrink-0 w-[25px] h-[25px] relative overflow-visible" style="" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.1258 3.46875H33.2277L22.0844 16.202L35.1934 33.5312H24.9316L16.8885 23.0238L7.69629 33.5312H2.58711L14.5037 19.9092L1.93672 3.46875H12.4586L19.7213 13.0729L28.1258 3.46875ZM26.3336 30.4816H29.1592L10.9193 6.35938H7.88418L26.3336 30.4816Z" fill="black" />
                                </svg>
                            </a>
                            <a href="">
                                <svg class="shrink-0 w-[30px] h-[25px] relative overflow-visible" style="" width="46" height="37" viewBox="0 0 46 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_438_28)">
                                        <path d="M44.9841 5.77097C44.7202 4.65554 44.2056 3.63863 43.4913 2.82151C42.7771 2.0044 41.8881 1.41558 40.9131 1.1137C37.3434 0 22.9767 0 22.9767 0C22.9767 0 8.60922 0.033711 5.03955 1.14741C4.06448 1.44931 3.17555 2.03816 2.46129 2.85531C1.74704 3.67247 1.23237 4.68941 0.96855 5.80489C-0.111192 13.0606 -0.530044 24.1166 0.998199 31.0821C1.26205 32.1975 1.77672 33.2144 2.49098 34.0315C3.20524 34.8486 4.09415 35.4374 5.0692 35.7393C8.63887 36.853 23.006 36.853 23.006 36.853C23.006 36.853 37.3729 36.853 40.9424 35.7393C41.9175 35.4375 42.8064 34.8487 43.5207 34.0316C44.235 33.2144 44.7497 32.1975 45.0136 31.0821C46.1524 23.8161 46.5033 12.7668 44.9841 5.77097Z" fill="#FF0000" />
                                        <path d="M18.4038 26.3234L30.3221 18.4263L18.4038 10.5293V26.3234Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_438_28">
                                            <rect width="46" height="37" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="w-[85%] rounded-lg shadow-xl bg-secD flex mt-10 h-auto mb-3">
                    <div class="flex-col w-full gap-3 relative">
                        <div class="w-full bg-secD md:h-28 h-20 rounded-[15px] flex justify-center items-center">
                            {{-- <span class="text-hitam text-2xl font-bold">PPLG 1</span> --}}
                        </div>
                        <div class="w-[94px] h-[26px] bg-secD text-center absolute border top-0 rounded-tl-lg rounded-br-xl shadow">
                            <p class="text-base font-semibold">Slogan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="w-full block">
            <div class="flex items-center w-full justify-between mt-5">
                <h1 class="mt-2 mb-4 block md:hidden lg:hidden text-lg font-semibold text-hitam px-2 border-2 border-hitam rounded-lg">Menu</h1>
            </div>
            <div class="w-full bg-[#ff8800] block h-[10svh] bg-opacity-50 rounded-2xl">
                {{-- tampilan hp --}}
                <div class="relative flex  right-0 justify-between items-center  h-[10svh] ">
                    <div class="w-[15%] h-[10svh] hidden md:flex border-2 border-hitam rounded-2xl items-center justify-center">
                        <h1 class="mb-3 text-xl text-center mt-4 font-semibold text-hitam px-2 ">Menu</h1>
                    </div>
                    <ul class="relative w-full md:w-2/3 flex flex-wrap border-2 mt-3 border-hitam p-1 h-[10svh] list-none rounded-2xl" data-tabs="tabs" role="list">
                        <li class="z-30 flex-auto text-center ">
                            <a class="z-30 flex items-center justify-center text-decoration-none w-full px-0 py-[10px] transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit" data-tab-target="" active="" role="tab" aria-selected="true" aria-controls="app">
                                <span class="ml-1 text-sm  text-orange mt-1">Galery</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a class="z-30 flex items-center justify-center text-decoration-none w-full px-0 py-[10px] transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit" data-tab-target="" role="tab" aria-selected="false" aria-controls="message">
                                <span class="ml-1 text-sm  text-orange mt-1">Memories</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a class="z-30 flex items-center justify-center text-decoration-none w-full px-0 py-[10px] transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit" data-tab-target="" role="tab" aria-selected="false" aria-controls="settings">
                                <span class="ml-1 text-sm  text-orange mt-1">project</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-tab-content="" class="p-3 container">
                <div class="block opacity-100 w-full" id="app" role="tabpanel">
                    <div class="block w-full items-center antialiased leading-relaxed h-auto">
                        <div class="swiper swiper-kelas lg:pt-[70px] mySwiper-kelas">
                            <div class="swiper-wrapper slide-kelas-wrap pb-20 ">
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(4).jpg') }}" />
                                </div>
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(5).jpg') }}" />
                                </div>
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(8).jpg') }}" />
                                </div>
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(9).jpg') }}" />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="arrow-swiper-kelas">
                                    <div class="swiper-pagination pag-kelas"></div>
                                    <div class="swiper-button-next arrow-icon"></div>
                                    <div class="swiper-button-prev arrow-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden opacity-0" id="message" role="tabpanel">
                    <div class="block w-full items-center antialiased leading-relaxed h-auto">
                        <div class="swiper swiper-kelas lg:pt-[70px] mySwiper-kelas">
                            <div class="swiper-wrapper slide-kelas-wrap pb-20 ">
                                <div class="swiper-slide slide-kelas">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(1).jpg') }}" />
                                </div>
                                <div class="swiper-slide slide-kelas img-fluid mx-2 shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(8).jpg') }}" />
                                </div>
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(6).jpg') }}" />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="arrow-swiper-kelas">
                                    <div class="swiper-pagination pag-kelas"></div>
                                    <div class="swiper-button-next arrow-icon"></div>
                                    <div class="swiper-button-prev arrow-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
                <div class="hidden opacity-0" id="settings" role="tabpanel">
                    <div class="block w-full items-center antialiased leading-relaxed h-auto">
                        <div class="swiper swiper-kelas lg:pt-[70px] mySwiper-kelas">
                            <div class="swiper-wrapper slide-kelas-wrap pb-20 ">
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(3).jpg') }}" />
                                </div>
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(2).jpg') }}" />
                                </div>
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(10).jpg') }}" />
                                </div>
                                <div class="swiper-slide img-fluid mx-2 slide-kelas shadow-xl">
                                    <img class="rounded-2xl object-cover" src="{{ Storage::url('assets/pplg/img/pplg2/pplg2(7).jpg') }}" />
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="arrow-swiper-kelas">
                                    <div class="swiper-pagination pag-kelas"></div>
                                    <div class="swiper-button-next arrow-icon"></div>
                                    <div class="swiper-button-prev arrow-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .swiper-kelas {
        padding-top: 15px;
        margin: 0;
        height: 500px;
    }

    .slide-kelas {
        background-position: center;
        background-size: cover;
        width: 500px;
        height: 350px;
    }


    .slide-kelas img {
        width: 150%;
        height: 100%
    }

    .pag-kelas .swiper-pagination-bullet {
        width: 0.6rem;
        height: 0.6rem;
    }

    .arrow-swiper-kelas {
        position: relative;
        bottom: 8rem;
        display: flex;
        justify-content: center;
        width: 15rem;
    }

    .pag-kelas {
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
    var swiper = new Swiper(".mySwiper-kelas", {
        effect: "coverflow"
        , grabCursor: true
        , centeredSlides: true
        , slidesPerView: "auto"
        , autoplay: {
            delay: 3500
            , disableOnInteraction: false
        , }

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

