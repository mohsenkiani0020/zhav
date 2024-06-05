<section  class="bg-GrayTint1">
    <div class="container mx-auto px-8 xl:px-20 py-10 sm:py-20">
        <div id="pricing" class="flex flex-col justify-center items-center">
            <h2 class=" text-my-blue-navy text-center !my-5">قیمت محصولات</h2>
        </div>
        <div
            x-data="{
                selectedButton: 1,
                scrollToElement(elementId) {
                    if (window.innerWidth < 1024) {
                        setTimeout(() => {
                            const element = document.querySelector(elementId);
                            if(element) {
                                element.scrollIntoView({ behavior: 'smooth' });
                            }
                        }, 300);
                    }
                }
            }"
            class="container mx-auto overflow-hidden py-8 md:py-4 lg:py-20 px-3"
        >
            <div class="grid grid-cols-12 gap-4 ">
                <div class="flex flex-col sm:flex-row justify-center items-center gap-5 col-span-12 lg:col-span-6 order-2 sm:order-none">
                    <div id="personal" x-show="selectedButton === 1" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-pink w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal1.png')}}" alt="قیمت سایت شخصی و شرکتی">
                        <h3 class="mt-5 !text-center !mb-0">سایت شخصی و شرکتی</h3>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">ساده</p>
                        <p class="font-32-normal mt-5 text-my-dark-pink !mb-0">12 <span class=" text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-dark-pink mt-5 text-my-white ">سفارش</button>
                    </div>
                    <div x-show="selectedButton === 1" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-pink w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal2.png')}}" alt="قیمت سایت شخصی و شرکتی پیشرفته">
                        <h3 class="mt-5 !text-center !mb-0">سایت شخصی و شرکتی</h3>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">پیشرفته با قابلیت ست کردن تاریخ جلسه</p>
                        <p class="font-32-normal mt-5 text-my-dark-pink !mb-0">15 <span class=" text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-dark-pink text-my-white  mt-5">سفارش</button>
                    </div>

                    <div id="store" x-show="selectedButton === 2" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-purple w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal1.png')}}" alt="قیمت سایت فروشگاهی پیشرفته">
                        <h3 class="font-24-bold mt-5 !text-center !mb-0">سایت فروشگاهی</h3>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">پیشرفته</p>
                        <p class="font-32-normal mt-5 text-my-purple !mb-0">18 <span class=" text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-purple mt-5 text-my-white ">سفارش</button>
                    </div>
                    <div x-show="selectedButton === 2" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-purple w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal2.png')}}" alt="قیمت سایت فروشگاهی ساده">
                        <h3 class="font-24-bold mt-5 !text-center !mb-0">سایت فروشگاهی</h3>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">ساده</p>
                        <p class="font-32-normal mt-5 text-my-purple !mb-0">14 <span class=" text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-purple text-my-white  mt-5">سفارش</button>
                    </div>

                    <div id="app" x-show="selectedButton === 3" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-light-blue w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal1.png')}}" alt="قیمت وب اپلیکیشن پیشرفته">
                        <h3 class="font-24-bold mt-5 !text-center !mb-0">وب اپلیکیشن</h3>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">پیشرفته سه پانل react و 20 صفحه و دریافت اطلاعات از API های خارجی</p>
                        <p class="font-32-normal mt-5 text-my-light-blue !mb-0">110 <span class=" text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-light-blue mt-5 text-my-white font-16-400">سفارش</button>
                    </div>
                    <div x-show="selectedButton === 3" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-light-blue w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal2.png')}}" alt="قیمت وب اپلیکیشن ساده">
                        <h3 class="font-24-bold mt-5 !text-center !mb-0">وب اپلیکیشن</h3>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">ساده - یک پانل react و 15 صفحه</p>
                        <p class="font-32-normal mt-5 text-my-light-blue !mb-0">55 <span class="font-20-500 text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-light-blue text-my-white font-16-400 mt-5">سفارش</button>
                    </div>

                    <div id="mobile" x-show="selectedButton === 4" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-blue w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal1.png')}}" alt="قیمت اپلیکیشن موبایل پیشرفته">
                        <h3 class="font-24-bold mt-5 !text-center !mb-0">اپلیکیشن موبایل<p>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">پیشرفته - با دیتابیس و back-end بر روی سرور با 25 صفحه</p>
                        <p class="font-32-normal mt-5 text-my-blue !mb-0">130 <span class="font-20-500 text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-blue mt-5 text-my-white font-16-400">سفارش</button>
                    </div>
                    <div x-show="selectedButton === 4" class="px-2 py-8 shadow-lg bg-white rounded-lg animate__animated animate__backInRight border-t-8 border-my-blue w-full flex justify-center flex-col items-center h-full">
                        <img class="h-16 w-16" src="{{asset('storage/website/medal2.png')}}" alt="قیمت اپلیکیشن موبایل ساده">
                        <h3 class="font-24-bold mt-5 !text-center !mb-0">اپلیکیشن موبایل</h3>
                        <p class="mt-4 text-gray-700 !text-center font-14-normal !mb-0">ساده - بدون دیتابیس و back-end بر روی سرور با 10 صفحه</p>
                        <p class="font-32-normal mt-5 text-my-blue !mb-0">55 <span class="font-20-500 text-my-black">میلیون تومان</span></p>
                        <button class="px-10 py-2 rounded-full bg-my-blue text-my-white font-16-400 mt-5">سفارش</button>
                    </div>
                </div>
                <div  class="w-full flex flex-col justify-between col-span-12 lg:col-span-6 order-1 sm:order-none">
                    <div data-aos="fade-right" data-aos-duration="2500" data-aos-offset="300" class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-6 my-auto lg:px-14">
                        <button
                            x-on:click="selectedButton = 1; scrollToElement('#personal')"
                            :class="{ 'bg-my-blue-navy text-white': selectedButton === 1, 'cursor-pointer my-shadow-hover  rounded-lg transition duration-700 my-shadow font-14-bold px-4 lg:px-6 py-8': true }"
                        >
                            <div class="flex flex-col justify-center items-center">
                                <img :class="{ ' logo': selectedButton === 1, 'h-10 w-10': true }" src="{{asset('storage/website/apartment.svg')}}" alt="قیمت سایت شخصی و شرکتی">
                                <h3 class="text-base !m-0 text-inherit ">سایت شخصی و شرکتی</h3>
                            </div>
                        </button>
                        <button
                            x-on:click="selectedButton = 2; scrollToElement('#store')"
                            :class="{ 'bg-my-blue-navy text-white': selectedButton === 2, 'cursor-pointer my-shadow-hover rounded-lg transition duration-700 my-shadow font-14-bold px-4 lg:px-6 py-8': true }"
                        >
                            <div class="flex flex-col justify-center items-center">
                                <img :class="{ ' logo': selectedButton === 2, 'h-10 w-10': true }" src="{{asset('storage/website/shop.svg')}}" alt="قیمت سایت فروشگاهی">
                                <h3 class="text-base !m-0 text-inherit ">سایت فروشگاهی</h3>
                            </div>
                        </button>
                        <button
                            x-on:click="selectedButton = 3; scrollToElement('#app')"
                            :class="{ 'bg-my-blue-navy text-white': selectedButton === 3, 'cursor-pointer my-shadow-hover rounded-lg transition duration-700 my-shadow font-14-bold px-4 lg:px-6 py-8': true }"
                        >
                            <div class="flex flex-col justify-center items-center">
                                <img :class="{ ' logo': selectedButton === 3, 'h-10 w-10': true }" src="{{asset('storage/website/google_code.svg')}}" alt="قیمت وب اپلیکیشن">
                                <h3 class="text-base !m-0 text-inherit ">وب اپلیکیشن</h3>
                            </div>
                        </button>
                        <button
                            x-on:click="selectedButton = 4; scrollToElement('#mobile')"
                            :class="{ 'bg-my-blue-navy text-white': selectedButton === 4, 'cursor-pointer my-shadow-hover rounded-lg transition duration-700 my-shadow GrayShade3 font-14-bold px-4 lg:px-6 py-8': true }"
                        >
                            <div class="flex flex-col justify-center items-center">
                                <img :class="{ ' logo': selectedButton === 4, 'h-10 w-10': true }" src="{{asset('storage/website/iPhone-SE.svg')}}" alt="قیمت اپلیکیشن موبایل">
                                <h3 class="text-base !m-0 text-inherit ">اپلیکیشن موبایل</h3>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
