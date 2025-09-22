<div class="relative pb-[80px] md:pb-[141px]">
    <span class="bg-black absolute left-0 h-[50%] w-full z-[-1] bottom-0"></span>
    <div class="flex justify-between w-full max-w-[1287px] md:px-[20px] ml-auto mr-auto">
        <div id="carousel-example" class="relative w-full" data-carousel="slide">
            <div class="relative overflow-hidden rounded-lg h-[400px] md:h-[599px]">
                @foreach ($slides as $slide)
                    <div id="carousel-item-<?= $slide ?>" class="hidden duration-700 ease-in-out rounded-[10px]" data-carousel-item>
                        <div class="relative <?= $img[$slide-1] ?> bg-cover w-full h-max">
                            <!-- Made the shadow a bit darker so the text is legible  -->
                            <span class="absolute bg-black/[.35] w-full h-full rounded-[10px] z-0"></span>
                            <div class="px-[20px] md:px-[60px] pt-[30px] md:pt-[85px] pb-[68px] relative z-1 <?= $slide % 2 == 0 ? "text-right flex flex-col items-end":"" ?>">
                                <p class="px-[11px] pb-[8px] max-w-[752px] text-white text-[16px] sm:text-[24px] md:text-[33px] leading-[32px] md:leading-[41px] font-bold">“We have been delighted with our DNS partnership. The club now has direction & delivery on all document processes with a clear road map for the foreseeable future. ”</p>
                                <p class="font-(family-name:IBM-Plex-Mono) px-[11px] mb-[216px] text-xs leading-[28px] text-white">Paul Johnson, Director<br>Nottingham Forest Football Club</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="absolute z-30 flex bottom-10 md:bottom-17.5 left-15 space-x-2 rtl:space-x-reverse">
                <button type="button" class="w-5.5 h-5.5 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-5.5 h-5.5 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-5.5 h-5.5 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-5.5 h-5.5 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-5.5 h-5.5 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
        </div>



        
    </div>
</div>