<div class="w-full">
    <h3 class="pb-[31px] font-bold text-[24px] md:text-[40px] leading-[28px] md:leading-[58px]">FAQ’s</h3>
    <span class="h-[1px] w-full bg-[#CACACA]/[.5] block mb-[15px]"></span>
    @foreach ($posts as $post)
        <div class="relative faq-dropdown grid hover:cursor-pointer font-(family-name:Gilroy) font-medium md:text-[23px] leading-[45px] mb-[15px]">
            <div class="cross relative flex items-center">
                <p><?= $post ?><p>
                <span></span>
                <span></span>
            </div>
            <span class="h-[1px] w-full bg-[#CACACA]/[.5] block mt-[15px]"></span>
            <div class="faq-content absolute bg-black overflow-hidden z-0 mt-[1px] opacity-0 top-[100%]">
                <p class="text-sm p-[24px] leading-[20px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    @endforeach
    <a href="#" class="underline text-xs leading-[23px] font-(family-name:IBM-Plex-Mono) pt-[9px]">View all FAQs</a>
</div>