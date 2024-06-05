<div>
    <div>
        <div class="relative hiro-image bg-center bg-no-repeat bg-cover h-[100vh] bg-fixed">
            <div class="absolute inset-0 bg-[rgba(0,0,0,0.4)] flex flex-col-reverse">
                <div data-aos="fade-up" data-aos-duration="3000" class="mb-8 sm:mb-20 px-8 sm:px-2 md:px-8 xl:px-20">
                    <h1 class="text-my-white lg:text-7xl">ژاو استودیو</h1>
                    <h2 class="text-my-white !my-5 font-300 lg:max-w-[50%] text-xl sm:text-2xl">خدمات طراحی و اجرای انواع وب سایت‌های شخصی، تجاری و اپلیکیشن های موبایل اندروید و iOS</h2>
                    <div class="flex gap-3 mt-9 justify-center sm:justify-normal flex-col sm:flex-row">
                        <button class="hover:opacity-70  rounded-full px-9 py-3 text-my-white border-2">خدمات</button>
                        <button class="hover:opacity-70  border-2 border-solid bg-my-white rounded-full px-9 py-3"><span class="bg-gradient-to-r from-my-light-blue to-my-blue-navy text-transparent bg-clip-text !leading-none">تماس با ما</span></button>
                    </div>                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media (min-width: 320px) {
        .hiro-image {
            background-image: url({{asset('storage/website/hiro-mobile.webp')}});
        }
    }

    @media (min-width: 760px){
        .hiro-image {
            background-image: url({{asset('storage/website/hiro.webp')}});
        }
    }
</style>
