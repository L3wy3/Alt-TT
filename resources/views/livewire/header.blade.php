<header class="absolute w-full z-10">
    <div class="relative py-[30px] px-[30px] lg:px-[20px] max-w-[1440px] text-[#FFF] flex ml-auto mr-auto">
        <div class="w-full flex justify-between md:justify-start">
            <a href="#"><?= file_get_contents("dns-logo.svg") ?></a>
            <div id="burger" class="right-0 md:hidden">
                <svg class="w-[74px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="#eee" stroke-width=".6" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
                <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
                    <animate dur="0.2s" attributeName="d" values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze" begin="start.begin" />
                    <animate dur="0.2s" attributeName="d" values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze" begin="reverse.begin" />
                </path>
                <rect width="10" height="10" stroke="none">
                    <animate dur="2s" id="reverse" attributeName="width" begin="click" />
                </rect>
                <rect width="10" height="10" stroke="none">
                    <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
                    <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
                </rect>
                </svg>
            </div>
            <div id="menu" class="px-[20px] py-[20px] md:py-[0px] md:px-[33px] flex md:static md:block bg-white md:bg-transparent text-[#9620ce] md:text-white left-[-100%] md:right-[unset] absolute md:relative top-[120px] md:top-[unset] flex-col md:flex-row" >
                <div class="pb-[30px] font-(family-name:IBM-Plex-Mono) text-[13px] flex-col md:flex-row flex" style="font-family: 'IBM Plex Mono', monospace;">
                    <a href="#" class="pr-[33px] hover:underline" href="">0845 034 0895</a>
                    <a href="#" class="pr-[33px] hover:underline" href="">About us</a>
                    <a href="#" class="pr-[33px] hover:underline" href="">Careers</a>
                </div>
                <div class="font-(family-name:'Gilroy', sans-serif) font-bold text-lg flex-col md:flex-row flex">
                    <a href="#" class="pr-[37px] hover:underline" href="">Services</a>
                    <a href="#" class="pr-[37px] hover:underline" href="">Case Studies</a>
                    <a href="#" class="pr-[37px] hover:underline" href="">Insights</a>
                    <a href="#" class="pr-[37px] hover:underline" href="">Contact</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col fixed md:relative bottom-[70px] right-[20px] md:right-[0px] md:right[unset] md:bottom-[unset]">
            <a class="text-right font-(family-name:IBM-Plex-Mono) text-black md:text-white font-medium text-[13px] mb-[21px] opacity-0 md:opacity-[unset]" href="">Request&nbsp;support</a>
            <a class="rounded-[5px] font-(family-name:Gilroy) font-bold text-lg capitalize py-[10px] pl-[27px] pr-[29px] bg-white text-[#48307F] hover:bg-[#C92C93] hover:text-white duration-[0.5s]" href="">Call&nbsp;me&nbsp;back</a>
        </div>
    </div>
</header>