<section id="sejarah" class="bg-[#0D0D0D]">
    <div class="container py-20">
        <h1 class="border-[1px] rounded-[10px] border-white p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-white font-bold">Sejarah</h1>
        <div class="dropdowns mt-10 md:mt-20">
            <div class="flex flex-col lg:flex-row justify-between text-white">
                <h1 class="font-bold lg:w-[15%]" data-aos='fade-right' data-aos-once="true">Sejarah <span class="text-orange">PPLG?</span></h1>
                <div class="flex flex-col lg:w-[75%]" data-aos='fade-down' data-aos-once="true">
                    <p class="md:text-[20px] lg:text-[24px] text-[#B7B7B7]">
                        Sejarahnya dimulai sejak revolusi komputer pada abad ke-20, ketika komputer menjadi lebih mudah diakses dan digunakan oleh masyarakat umum.</p>
                    <div class="flex justify-between items-center">
                        <hr class="md:w-[70%] w-[50%]" style=" border-width: 2px; color: #626262;">
                        <button id="but" onclick="toggleDropdown()" class="relative text-black bg-[#E8E8E8] py-[14px] pl-[14px] pr-[40px] rounded-lg font-bold text-xs">Open Content <i class="ph-bold transition-all duration-700 ph-arrow-right text-xs md:text-xl absolute right-4 md:right-3 top-4 md:top-3 align-middle md:ml-1"></i></button>
                    </div>
                </div>
            </div>
            <div id="dropdownContent" class="dropdown-content mt-10 flex-col-reverse md:flex-row" '>
                <div class="contex flex flex-col md:w-[70%] lg:w-[75%] border-[1px] border-[#6F6F6F] font-semibold md:text-xl rounded-3xl text-white overflow-auto">
                    <p class="p-4 m-0"> Awalnya, pengembangan perangkat lunak lebih merupakan kegiatan yang dilakukan oleh para ilmuwan komputer dan insinyur di perusahaan-perusahaan besar atau lembaga-lembaga pemerintah. Namun, seiring dengan waktu, permintaan akan perangkat lunak yang lebih kompleks dan beragam semakin meningkat, memunculkan kebutuhan akan profesional yang memiliki pengetahuan dan keterampilan khusus dalam pengembangan perangkat lunak.</p>
                    <p class="p-4 m-0"> Seiring dengan perkembangan teknologi dan kebutuhan pasar yang terus berubah, program-program studi PPLG mulai mengalami transformasi. Kurikulumnya menjadi lebih beragam, mencakup topik-topik seperti desain perangkat lunak, manajemen proyek perangkat lunak, pengujian perangkat lunak, dan pengembangan aplikasi web dan mobile. Hingga saat ini, jurusan PPLG menjadi salah satu jurusan yang diminati banyak orang karena prospek karir yang cerah di industri teknologi informasi dan komunikasi. Program-program studi PPLG terus berkembang dan menyesuaikan diri dengan perkembangan terbaru dalam dunia teknologi, seperti kecerdasan buatan, komputasi awan, dan pengembangan perangkat lunak berbasis platform.</p>
                </div>
                <div class="md:w-[25%] flex justify-center md:items-center lg:items-end flex-col">
                    <div class="flex justify-start items-start md:justify-end md:items-center">
                        <img class="pointer-events-none md:w-56 w-full h-56 mb-5 rounded-3xl object-cover" src="https://clickamericana.com/wp-content/uploads/Computer-programming-in-FORTRAN-1967.jpg" alt="">
                    </div>
                    <div class=" justify-end items-end mb-5 hidden md:flex">
                        <img class="pointer-events-none md:w-56 w-full h-56 rounded-3xl object-cover" src="https://static01.nyt.com/images/2019/02/17/magazine/17mag-coders-pics-slide-D1T4/17mag-coders-pics-slide-D1T4-jumbo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .dropdowns {
        width: 100%;
    }

    .dropbtn {
        background-color: #333;
        color: white;
        padding: 14px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown-content {
        max-height: 0;
        overflow: hidden;
        transition: all 0.6s ease-in-out;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }


    .start {
        max-height: 900px;
    }

    .contex::-webkit-scrollbar {
        display: none;
    }

</style>


<script>
    function toggleDropdown() {
        let dropdownContent = document.getElementById("dropdownContent");
        let arrow = document.getElementsByClassName("ph-bold")[0];
        dropdownContent.classList.toggle("start");

        if (dropdownContent.classList.contains("start")) {
            arrow.classList.add("rotate-90");
        } else {
            arrow.classList.remove("rotate-90")
        }
    }

</script>
