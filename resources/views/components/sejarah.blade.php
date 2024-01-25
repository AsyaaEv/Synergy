<section id="sejarah" class="bg-[#0D0D0D]">
    <div class="container py-5">
        <h1 class="border-[1px] rounded-[10px] border-white p-[10px] inline-block m-0 text-[25px] text-white font-bold">Sejarah</h1>
        <div class="dropdowns mt-20">
            <div class="flex justify-between text-white">
                <h1 class="font-bold w-[15%]">Apa itu PPLG?</h1>
                <div class="flex flex-col w-[75%]">
                    <p class="text-[24px] text-[#B7B7B7]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <div class="flex justify-between items-center">
                        <hr style="width:70%; border-width: 2px; color: #626262;">
                        <button id="but" onclick="toggleDropdown()" class="relative text-black bg-[#E8E8E8] py-[14px] pl-[14px] pr-[40px] rounded-lg font-bold">Open Content <i class="halo ph-bold ph-arrow-right text-xl absolute right-3 top-4 align-middle ml-1"></i></button>

                    </div>
                </div>
            </div>
            <div id="dropdownContent" class="dropdown-content mt-10">
                <div class="flex flex-col w-[75%] border-[1px] border-[#6F6F6F] font-semibold text-xl rounded-3xl text-white items-center justify-center">
                    <p class="p-4 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam. Veniam dolore accusantium, commodi architecto aspernatur consectetur mollitia dolor dignissimos dicta voluptas, tempora voluptate error deserunt modi nostrum illum unde, ratione optio id nisi magni dolorem eaque rerum nulla. Deleniti recusandae minima eligendi natus aliquid, architecto animi quia placeat corporis harum tenetur sed fugit quis itaque assumenda possimus dolore quod. </p>
                    <p class="p-4 m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non at exercitationem recusandae similique, alias ratione nisi reprehenderit vero harum ullam. Reprehenderit ipsam ad eos, consequuntur voluptatibus suscipit possimus magni ducimus expedita aspernatur natus nemo dolor quisquam quam fuga quos facilis, repellat laboriosam similique ea doloremque quod aut! Et, sapiente hic!</p>
                </div>
                <div class="w-[25%] flex justify-end items-end flex-col">
                    <img class="w-56 mb-5 rounded-3xl" src="https://swiperjs.com/demos/images/nature-1.jpg" alt="">
                    <img class="w-56 rounded-3xl" src="https://swiperjs.com/demos/images/nature-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .rotasi {
        transform: rotate(90deg);
        transition: .4s ease-in-out
    }

    .rotasi2 {
        transition: .4s ease-in-out
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
        display: none;
        width: 100%;
    }

    .show {
        display: flex;
        justify-content: space-between;
    }

</style>


<script>
    function toggleDropdown() {
        let dropdownContent = document.getElementById("dropdownContent");
        let arrow = document.getElementsByClassName("ph-bold")[0];
        dropdownContent.classList.toggle("show");

        if (dropdownContent.classList.contains("show")) {
            arrow.classList.add("rotasi");
            arrow.classList.remove("rotasi2");
        } else {
            arrow.classList.add("rotasi2");
            arrow.classList.remove("rotasi")
        }
    }

</script>
