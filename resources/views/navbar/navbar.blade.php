<div>
    <nav class="absolute z-50 w-full top-0 right-0">
        <div class="w-full flex justify-between items-center mt-3 px-3 lg:hidden">
            <div class="flex gap-3 justify-center items-center relative">
                <a href="{{route('home')}}" wire:navigate class="after:absolute after:inset-0"></a>
                <img class="w-12 h-12 logo" src="{{asset('storage/website/zhav-new.svg')}}" alt="zhav studio">
                <div class="flex flex-col items-start justify-center">
                    <p class="text-my-white  item2-js !m-0">ژاو استودیو</p>
                    <p class="text-my-lighter-gray  item3-js !m-0 !text-xxs sm:text-sm">همه چیز از یک رویا شروع ﻣﻰشود</p>
                </div>
            </div>
            <div x-data="{ open: false }" @click.outside="open = false">
                <button @click="open = ! open">
                    <img class="w-9 h-9" src="{{asset('storage/website/menu.svg')}}" alt="menu icon">
                </button>
                <div x-show="open" class="flex flex-col p-5 gap-6 items-center bg-my-white rounded-md z-10 w-[90%] absolute left-1/2 transform -translate-x-1/2 top-20">
                    <button class="text-my-black  scrollButton hover:opacity-70" x-scroll="#about">خدمات</button>
                    <button class="text-my-black hover:opacity-70" x-scroll="#featurs">بلاگ</button>
                    <a class="text-my-black hover:opacity-70" href="{{route('about-us')}}" wire:navigate >درباره ما</a>
                    <div class="flex flex-col gap-3 w-1/2">
                        <button class="border-2 border-solid rounded-full text-my-black min-w-28 py-2 font-16-400 hover:opacity-70">ورود</button>
                        <button class="rounded-full min-w-28 py-2 font-16-400 text-my-white bg-gradient-to-r from-my-light-blue to-my-blue-navy hover:opacity-70">ثبت نام</button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div data-aos="fade-up" data-aos-duration="1000" id="header"  class="animate__animated animate-js  px-16 pt-8 justify-between items-center w-full z-10 hidden lg:flex">
                <div class="flex gap-3 justify-center items-center relative">
                    <a href="{{route('home')}}" wire:navigate class="after:absolute after:inset-0" alt="zhav studio home page"></a>
                    <img class="w-12 h-12 logo" src="{{asset('storage/website/zhav-new.svg')}}" alt="zhav studio">
                    <div class="flex flex-col items-start justify-center">
                        <p class="text-my-white font-16-400 item-js !m-0">ژاو استودیو</p>
                        <p class="text-my-lighter-gray font-12-400 item2-js !m-0">همه چیز از یک رویا شروع ﻣﻰشود</p>
                    </div>
                </div>
                <div class="flex gap-8 items-center">
                    <div class="flex gap-9">
                        <a class="text-my-white font-16-400 item-js scrollButton hover:opacity-70" href="#about">خدمات</a>
                        <a class="text-my-white font-16-400 item-js  hover:opacity-70" href="#featurs">بلاگ</a>
                        <a class="text-my-white font-16-400 item-js  hover:opacity-70" href="{{route('about-us')}}" wire:navigate >درباره ما</a>
                        <!-- <a class="text-white Subtitle1Medium item-js " href="#pricing">Pricing</a> -->
                    </div>
                    <div class="flex gap-3">
                        <button class="button-head border-2 border-solid rounded-full text-my-white min-w-28 py-2 font-16-400 hover:opacity-70">ورود</button>
                        <button class="rounded-full min-w-28 py-2 font-16-400 text-my-white bg-gradient-to-r from-my-light-blue to-my-blue-navy hover:opacity-70">ثبت نام</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

