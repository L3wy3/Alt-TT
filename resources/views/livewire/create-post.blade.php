<div class="w-full">
    <h3 class="pb-[31px] font-bold text-[24px] md:text-[40px] leading-[28px] md:leading-[48px]">Insights & News</h3>
    <div class="grid gap-x-[28px] gap-y-[60px] md:grid-cols-2">
        @foreach ($posts as $post)
            <div class="group <?= $post == 0 ? 'col-span-full' : '' ?> hover:cursor-pointer">
                <div class="mb-[18px] <?=$img[$post]?> rounded-[10px] w-full aspect-289/194 bg-cover bg-center <?= $post == 0 ? 'md:aspect-602/245' : '' ?>"></div>
                <p class="text-base leading-[30px] font-(family-name:IBM-Plex-Mono)"><?=$date[$post]?></p>
                <p class="font-(family-name:Gilroy) font-bold leading-[33px] text-[25px] group-hover:underline"><?=$text[$post]?></p>
            </div>
        @endforeach
    </div>
</div>