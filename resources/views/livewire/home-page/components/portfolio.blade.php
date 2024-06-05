<section class="px-8">
    <div id="case"
        x-data="{
                selectedButton: 3,
                scrollToElement(elementId) {
                    setTimeout(() => {
                        const element = document.querySelector(elementId);
                        if(element) {
                            element.scrollIntoView({ behavior: 'smooth' });
                        }
                    }, 300); // Adjust the delay as needed
                }
            }"
        class="sm:overflow-hidden"
    >
        <div data-aos="fade-up" data-aos-duration="1000">
            <h2 class="font-56-300 text-my-blue-navy !mb-5 !text-center">نمونه کار</h2>
            <div class="flex gap-5 justify-center items-center flex-col sm:flex-row">
                <button x-on:click="selectedButton = 1; scrollToElement('#webapp')" :class="{'bg-gradient-to-r from-my-light-blue to-my-blue-navy text-my-white animate__animated animate__fadeIn' : selectedButton === 1 , 'cursor-pointer px-6 py-3 sm:w-auto font-16-400 shadow-sm hover:shadow-lg rounded-full text-center w-full' : true}" transition="bg 1s ease" >وب اپلیکیشن و استارت آپ</button>
                <button x-on:click="selectedButton = 2; scrollToElement('#webstore')" :class="{'bg-gradient-to-r from-my-light-blue to-my-blue-navy text-my-white animate__animated animate__fadeIn' : selectedButton === 2 , 'cursor-pointer px-6 py-3 sm:w-auto font-16-400 shadow-sm hover:shadow-lg rounded-full text-center w-full' : true}" transition="bg 1s ease">سایت فروشگاهی و شرکتی</button>
                <button x-on:click="selectedButton = 3; scrollToElement('#mobileapp')" :class="{'bg-gradient-to-r from-my-light-blue to-my-blue-navy text-my-white animate__animated animate__fadeIn' : selectedButton === 3 , 'cursor-pointer px-6 py-3 sm:w-auto font-16-400 shadow-sm hover:shadow-lg rounded-full text-center w-full' : true}" transition="bg 1s ease">اپلیکیشن موبایل</button>
            </div>
        </div>
        <div id="webapp" x-show="selectedButton === 1" class="grid grid-cols-2 gap-5 sm:gap-0 py-10 animate__animated animate__backInRight">
            <div class=" col-span-2 sm:col-span-1">
                <picture>
                    <source srcset="{{asset('storage/website/diaco.webp')}}">
                    <img src="{{asset('storage/website/diaco.png')}}" alt="وب اپلیکیشن و استارتاپ">
                </picture>
            </div>
            <div class="text-center sm:text-start px-8 lg:px-24 flex flex-col justify-center col-span-2 sm:col-span-1">
                <h3 class="font-32-normal text-my-gray !mb-0">وب اپلیکیشن و استارتاپ</h3>
                <a href="https://diacocenter.com/"><h4 class="text-my-blue-navy">دیاکو سنتر</h4></a>
                <p class="text-gray-700 !mt-2 sm:text-justify !mb-0">وب اپلیکیشن دیاکو سنتر به عنوان واسطه صنعت و دانشگاه عمل می‌کند.</p>


            </div>
        </div>
        <div id="webstore"  x-show="selectedButton === 2" class="grid grid-cols-2 gap-5 sm:gap-0 py-10 animate__animated animate__backInRight">
            <div class=" col-span-2 sm:col-span-1">
                <picture>
                    <source srcset="{{asset('storage/website/madam.webp')}}">
                    <img src="{{asset('storage/website/madam.png')}}" alt="سایت فروشگاهی و شرکتی">
                </picture>
            </div>
            <div class="text-center sm:text-start px-8 lg:px-24 flex flex-col justify-center col-span-2 sm:col-span-1">
                <h3 class="font-32-normal text-my-gray !mb-0">سایت فروشگاهی و شرکتی</h3>
                <a href="https://madambella.ir/"><h4 class="text-my-blue-navy">مادام بلا</h4></a>
                <p class="text-gray-700 !mt-2 sm:text-justify !mb-0">تولید کننده و عرضه کننده انواع کلاه ، شال ، روسری ، کراپ ، بادی و نیم تنه در ایران</p>
            </div>
        </div>
        <div id="mobileapp" x-show="selectedButton === 3" class="grid grid-cols-2 gap-5 sm:gap-0 py-10 animate__animated animate__backInRight">
            <div class=" col-span-2 sm:col-span-1">
                <picture>
                    <source srcset="{{asset('storage/website/landa-image.webp')}}">
                    <img src="{{asset('storage/website/landa-image.png')}}" alt="اپلیکیشن موبایل">
                </picture>
            </div>
            <div class="text-center sm:text-start px-8 lg:px-24 flex flex-col justify-center col-span-2 sm:col-span-1">
                <h3 class="font-32-normal text-my-gray !mb-0">اپلیکیشن موبایل</h3>
                <a href="https://landatrip.ca/"><h4 class="text-my-blue-navy">لاندا تریپ</h4></a>
                <p class="text-gray-700 !mt-2 sm:text-justify !mb-0">یک استارت آپ بین‌المللی که دارای وب اپلیکیشن و موبایل اپلیکیشن بوده که هم اکنون نیز بر روی فروشگاه گوگل پلی در دسترس می باشد.</p>

            </div>
        </div>

    </div>
</section>
