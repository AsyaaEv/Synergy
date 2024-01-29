<section id="programKerja" class="w-full h-auto">
    <div class="container py-5">
        <h1
            class="border-[1px] rounded-[10px] border-hitam p-[10px] inline-block m-0 text-[20px] md:text-[25px] text-hitam font-bold">
            Sejarah</h1>
        <div class="w-auto h-auto mt-5">
            <h1 class=" font-bold text-3xl text-wrap text-center">PROGRESS PROGAM KERJA</h1>
            <h1 class=" font-bold text-3xl text-wrap text-center">PROGAM KEAHLIAN PENGEMBANGAN PERANGKAT LUNAK DAN GIM
            </h1>
        </div>
        <div class="w-full h-[4rem] bg-orange">
            <div class="flex shadow-xl rounded-lg items-center justify-between">
                <button class="font-semibold text-2xl">Progam Kerja Tahunan</button>
                <i class="ph-bold ph-caret-down text-3xl"></i>
            </div>
        </div>

    </div>
</section>

<style>
    .rotasi {
        transform: rotate(90deg);
        transition: 1s ease-in-out
    }

    .rotasi2 {
        transition: 1s ease-in-out
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
        transition: 0.4s;
    }

    .dropdown-content {
        max-height: 0;
        overflow: hidden;
        transition: all 1s ease-in-out;
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