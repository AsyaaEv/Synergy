<section id="sejarah" class="bg-[#0D0D0D]">
    <div class="container py-5">
        <h1 class="border-[1px] rounded-[10px] border-white p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-white font-bold">Sejarah</h1>
        <div class="dropdowns mt-10 md:mt-20">
            <div class="flex flex-col lg:flex-row justify-between text-white">
                <h1 class="font-bold lg:w-[15%]">Apa itu PPLG?</h1>
                <div class="flex flex-col lg:w-[75%]">
                    <p class="md:text-[20px] lg:text-[24px] text-[#B7B7B7]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <div class="flex justify-between items-center">
                        <hr class="md:w-[70%] w-[50%]" style=" border-width: 2px; color: #626262;">
                        <button id="but" onclick="toggleDropdown()" class="relative text-black bg-[#E8E8E8] py-[14px] pl-[14px] pr-[40px] rounded-lg font-bold text-xs">Open Content <i class="halo ph-bold ph-arrow-right text-xs md:text-xl absolute right-4 md:right-3 top-4 md:top-3 align-middle md:ml-1"></i></button>
                    </div>
                </div>
            </div>
            <div id="dropdownContent" class="dropdown-content mt-10 flex-col-reverse md:flex-row">
                <div class="contex flex flex-col md:w-[70%] lg:w-[75%] border-[1px] border-[#6F6F6F] font-semibold md:text-xl rounded-3xl text-white overflow-auto">
                    <p class="p-4 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam. Veniam dolore accusantium, commodi architecto aspernatur consectetur mollitia dolor dignissimos dicta voluptas, tempora voluptate error deserunt modi nostrum illum unde, ratione optio id nisi magni dolorem eaque rerum nulla. Deleniti recusandae minima eligendi natus aliquid, architecto animi quia placeat corporis harum tenetur sed fugit quis itaque assumenda possimus dolore quod. </p>
                </div>
                <div class="md:w-[25%] flex justify-center md:items-center lg:items-end flex-col">
                    <div class="flex justify-start items-start md:justify-end md:items-center">
                        <img class="md:w-56 w-full h-56 mb-5 rounded-3xl object-cover" src="https://swiperjs.com/demos/images/nature-1.jpg" alt="">
                    </div>
                    <div class=" justify-end items-end mb-5 hidden md:flex">
                        <img class="md:w-56 w-full h-56 rounded-3xl object-cover" src="https://swiperjs.com/demos/images/nature-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .rotasi {
        transform: rotate(90deg);
        transition: 0.5s ease-in-out
    }

    .rotasi2 {
        transition: 0.5s ease-in-out
    }

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
            arrow.classList.add("rotasi");
            arrow.classList.remove("rotasi2");
        } else {
            arrow.classList.add("rotasi2");
            arrow.classList.remove("rotasi")
        }
    }

</script>
