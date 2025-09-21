<footer class="bg-[#FF3A7A] text-[#FFF] relative">
    <div class="absolute flex w-full max-w-[1247px] ml-auto mr-auto h-full left-[41%]" style="overflow:hidden;transform: translateX(-50%);">
        <?= file_get_contents("Geometric-footer.svg") ?>
    </div>
    <div class="flex w-full max-w-[1247px] ml-auto mr-auto  px-[20px] md:px-[0px] pt-11 md:pt-22 pb-11 md:pb-22 relative z-1 md:justify-between flex-col md:flex-row">
        <div class="max-w-[607px] w-full">
            <p class="text-4xl md:text-6xl pb-[17px]" id="text-outline" style="font-family: 'Gilroy-Bold', sans-serif;">We’re <span>your</span> IT Services problem solvers</p>
            <p class=" leading-[30px]">Recognising your frustrations with your print environment, IT services, document management & communications and finding.<br><br>Get in touch today!</p>
        </div>
        <div class="max-w-[488px] w-full">
            <form action="" class="flex flex-col items-end">
                <input type="text" class="w-full border border-white py-3 px-5 mb-6 placeholder-opacity-100" placeholder="Name">
                <input type="text" class="w-full border border-white py-3 px-5 mb-6 placeholder-text-white placeholder-z-1 placeholder-opacity-100" name="" id="" placeholder="Email">
                <input type="text" class="w-full border border-white py-3 px-5 mb-6" name="" id="" placeholder="Telephone">
                <input type="text" class="w-full border border-white py-3 px-5 mb-6" name="" id="" placeholder="Company">
                <input type="text" class="w-full border border-white py-3 px-5 mb-6" name="" id="" placeholder="I need help with...">
                <button class="py-[12px] pl-[50px] pr-[57px] bg-white text-[#3C2A7D] w-max hover:bg-[#3C2A7D] hover:text-white hover:cursor-pointer duration-250">Submit now</button>
            </form>
        </div>
    </div>
    <div class="flex w-full max-w-[1247px] ml-auto mr-auto px-[20px] md:px-[0] pt-5 md:pt-22 pb-11 md:pb-22 justify-between relative z-1 flex-col md:flex-row">
        <div><?= file_get_contents("dns-logo.svg") ?></div>
        <div class="flex flex-col font-(family-name:IBM-Plex-Mono)">
            <p class="py-[12px] md:py-[0px]">Contact us</p>
            <a href="mailto:info@dnslimited.co.uk">E  info@dnslimited.co.uk</a>
            <a href="tel:08450340895">T  0845 034 0895</a>
        </div>
        <div class="flex flex-col">
            <p class="py-[12px] md:py-[0px]">Address<br>Unit 9<br>Royal Scot Road,<br>Pride Park, Derby<br>DE24 8AJ</p>
        </div>
        <div class="flex flex-col py-[12px] md:py-[0px]">
            <p>Opening hours<br>Mon – Fri:<br>9 am – 5:30 pm</p>
        </div>
        <div class="flex flex-col md:leading-[20px] leading-[unset]">
            <a href="#" class="hover:underline">About us</a>
            <a href="#" class="hover:underline">CSR</a>
            <a href="#" class="hover:underline">Enivronment & Sustainability</a>
            <a href="#" class="hover:underline">Meet the team</a>
        </div>
        <div class="flex flex-col">
            <a href="#" class="hover:underline">Services</a>
            <a href="#" class="hover:underline">IT Services</a>
            <a href="#" class="hover:underline">Communications</a>
            <a href="#" class="hover:underline">Managed Print Services</a>
            <a href="#" class="hover:underline">Document Management</a>
        </div>
    </div>
    <div class="border-t border-white relative z-1">
        <div class="flex justify-between max-w-[1500px] ml-auto mr-auto pt-[19px] pb-[26px] leading-[26px] text-[11px] font-(family-name:IBM-Plex-Mono) px-[20px] md:px-[unset] flex-col md:flex-row">
            <a href="https://www.alt-design.net/" target="_blank">Design & built by Alt</a>
            <p>© Document Network Services Ltd 2024</p>
        </div>
    </div>
</footer>